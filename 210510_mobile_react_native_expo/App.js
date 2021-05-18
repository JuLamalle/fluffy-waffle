import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import Tabs from './tabs/index';
import AppLoading from 'expo-app-loading';
import { useFonts, Inter_900Black } from '@expo-google-fonts/inter';
import { Assistant_400Regular } from '@expo-google-fonts/assistant';


export default function App() {
  let [fontsLoaded] = useFonts({
    Inter_900Black,
    Assistant_400Regular
  });

  if (!fontsLoaded) {
    return <AppLoading />;
  }
  
  return (
 
    <NavigationContainer>
      <Tabs/>
    </NavigationContainer>
   
   
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
