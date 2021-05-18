import React, { Profiler } from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import SettingsMenu from './SettingsMenu';
import Login from './Login';
import Profile from './Profile';

const Stack = createStackNavigator();

export default function SettingsStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="SettingsMenu" component={SettingsMenu} />
      <Stack.Screen name="Login" component={Login} />
      <Stack.Screen name="Profile" component={Profile} />
    </Stack.Navigator>
  );
}

