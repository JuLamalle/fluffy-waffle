import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import SettingsStack from './settingsStack/index';

export default function SettingsScreen({navigation}) {
      return (
            <SettingsStack/>
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
  