import React from 'react';
import { Button, StyleSheet, Text, View, Alert } from 'react-native';

const setIsConnected = async (value) => {
  try {
    const jsonValue = JSON.stringify(value)
    await AsyncStorage.setItem('@isConnected', jsonValue)
      } catch (e) {
    // saving error
  }
}
export default function SettingsMenu({ navigation }) {
    return (
      <View style={styles.container}>
          <Text>
              Settings Menu
          </Text>
          <Button title='Login' onPress={() => navigation.navigate('Login')} />
          <Button title='Profile' onPress={() => navigation.navigate('Profile')} />
          <Button title="Go back" onPress={() => navigation.goBack()} />
          <Button title="LogOut" onPress={() => Alert.alert('Success!', 'You are logged out!', [{text: 'OK'}], setIsConnected(false) ) } />
      </View>
    );
    
}
const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
    elevation: 8,
    backgroundColor: "#999",
    borderRadius: 10,
    paddingVertical: 10,
    paddingHorizontal: 12,
  },
});