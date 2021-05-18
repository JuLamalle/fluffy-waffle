import React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import HomeMenu from './HomeMenu';
import Gallery1 from './Gallery1';
import Gallery from './Gallery';
import TopViral from './TopViral';
import TopWeek from './TopWeek';
import LastGalleries from './LastGalleries';
import SearchGalleries from './SearchGalleries';

const Stack = createStackNavigator();

export default function SettingsStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="HomeMenu" component={HomeMenu} />
      <Stack.Screen name="Gallery1" component={Gallery1} />
      <Stack.Screen name="Gallery" component={Gallery} options={{ title: 'Gallery Overview' }}/>
      <Stack.Screen name="TopViral" component={TopViral} options={{ title: 'Top Viral' }} />
      <Stack.Screen name="TopWeek" component={TopWeek} options={{ title: 'Top of the Week' }} />
      <Stack.Screen name="LastGalleries" component={LastGalleries} options={{ title: 'Last Galleries' }} />
      <Stack.Screen name="SearchGalleries" component={SearchGalleries} options={{ title: 'Galleries results' }} />
    </Stack.Navigator>
  );
}