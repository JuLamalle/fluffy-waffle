import React from 'react';
import { StyleSheet, Text, View, Button } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';

export default function Profile({navigation}) {
  const [isConnected, setIsConnected] = React.useState(false);

  const getIsConnected = async () => {
    try {
      const jsonValue = await AsyncStorage.getItem('@isConnected')
      setIsConnected(jsonValue);
    } catch(e) {
      // error reading value
    }
  }; 

  React.useEffect(() => {getIsConnected()});
    
  if(isConnected == 'true'){
    return (
      <View style={styles.container}>
          <Text>
              It's your Profile as a connected user
          </Text>
          <Button title="Go Home" onPress={() => navigation.navigate('Home')} />
      </View>
    )}
    else{
      return (
      <View style={styles.container}>
          <Text>
              You are not connected
          </Text>
          <Button title="Go to Settings" onPress={() => navigation.navigate('SettingsMenu')} />
      </View>
      )};
    
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});