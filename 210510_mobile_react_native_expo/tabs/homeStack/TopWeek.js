import React, { useEffect, useState } from 'react';
import { Button, StyleSheet, Text, View, ActivityIndicator, ScrollView, TouchableOpacity } from 'react-native';
import { LinearGradient } from 'expo-linear-gradient';

export default function SettingsMenu({ navigation }) {
  const [isLoading, setLoading] = useState(true);
  const [data, setData] = useState([]);

  useEffect(() => {     //C'est un hook, ça lance la fonction dès que les components sont chargés
    fetch('https://api.imgur.com/3/gallery/search/top/week?q=top', {headers:{'Authorization': 'Client-ID 1fbdce43e06d6a9'}})   //le '.json' est optionnel
      .then((response) => response.json())
      .then((json) => setData(json.data))  //Insert le resultat dans une variable 'data' à l'aide de la fonction useState() appellée plus haut
      .catch((error) => console.error(error))
      .finally(() => setLoading(false));
  }, []);

  const dataId = [
    { id: 'ORv00vu', name: 'I work in a Rare Book Library!' },
    { id: 'NGZOQK5', name: 'My Hobby, Macro photography' },
    { id: 'CfKLLdt', name: 'Play with your food!' },
  ];

  return (
    <LinearGradient
    // Background Linear Gradient
    colors={['#03001e', '#7303c0', '#ec38bc', '#fdeff9']}
  >

    <ScrollView>
      <View style={styles.titlecontainer}>
        <Text style={styles.title}>Top Of The Week</Text>
      </View>
      <View style={styles.container}>
        {/* {dataId.map((item, index)=>
          <View key={index} style={styles.button}>
            <Button title={item.name} onPress={() => navigation.navigate('Gallery', {galleryId:item.id})} />
          </View>
        )} */}
        {isLoading ? <ActivityIndicator/> : (
          data.map((item, index)=>
            <TouchableOpacity onPress={() => navigation.navigate('Gallery', {galleryId:item.id})} key={index}>
              <LinearGradient
                // Button Linear Gradient
                colors={['pink', '#3b5998', 'lightblue']}
                style={styles.button}
                >
                <Text>{item.title}</Text>
              </LinearGradient>
            </TouchableOpacity>
          )
        )}
      </View>
    </ScrollView>
    </LinearGradient>
  );
}
const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  button: {
    margin: 3,
    marginHorizontal: 10,
    borderRadius: 7,
    padding: 4

  },
  titlecontainer: {
    backgroundColor: '#404040',
    alignItems: 'center',
    justifyContent: 'center',
    padding: 7,
  },
  title: {
    fontSize: 22,
    fontFamily: 'Inter_900Black',
    color: '#d9d9d9',
  }


});

// ORv00vu / NGZOQK5 / CfKLLdt