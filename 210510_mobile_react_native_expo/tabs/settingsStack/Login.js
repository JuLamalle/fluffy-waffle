import React from 'react';
import { StyleSheet, Text, View, Button } from 'react-native';
import { makeRedirectUri, useAuthRequest } from 'expo-auth-session';
import * as WebBrowser from 'expo-web-browser';
import AsyncStorage from '@react-native-async-storage/async-storage';

WebBrowser.maybeCompleteAuthSession();

const discovery = {
  authorizationEndpoint: 'https://api.imgur.com/oauth2/authorize',
  tokenEndpoint: 'https://api.imgur.com/oauth2/token',
};


export default function Login({ navigation }) {
  const [isConnected, setStorage] = React.useState(false);

  // Request
  const [request, response, promptAsync] = useAuthRequest(
    {
      clientId: 'ae026603d4e04fb',
      clientSecret: '203d068825d33dcb90243aaf1dff7aba11059938',
      redirectUri: makeRedirectUri({
        scheme: 'myapp',
        }),
      // imgur requires an empty array
      scopes: [],
    },
    discovery
  );
  
  const setIsConnected = async (value) => {
    try {
      const jsonValue = JSON.stringify(value)
      await AsyncStorage.setItem('@isConnected', jsonValue)
        } catch (e) {
      // saving error
    }
  }

  const getIsConnected = async () => {
    try {
      const jsonValue = await AsyncStorage.getItem('@isConnected')
      setStorage(jsonValue);
    } catch(e) {
      // error reading value
    }
  }; 
  // isConnected = getIsConnected();
  React.useEffect(() => {
    getIsConnected();
    setIsConnected(false);
    if (response?.type === 'success') {
      const { code } = response.params;
      setIsConnected(true);
      navigation.navigate('Profile');
      }
  }, [response]);

  if(isConnected == 'false'){
  return (
    <Button
      disabled={!request}
      title="Are you sure ? Click here"
      onPress={() => {
        promptAsync();
        }}
    />
  );}else{
    return (
      <View style={styles.container}>
        <Text >
          You are connected !
        </Text>
      </View>);
  }
}

const styles = StyleSheet.create({
container: {
  flex: 1,
  backgroundColor: '#fff',
  alignItems: 'center',
  justifyContent: 'center',
},
});
