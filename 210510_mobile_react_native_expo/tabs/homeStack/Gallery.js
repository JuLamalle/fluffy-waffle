import React, { useEffect, useState } from 'react';
import { StyleSheet, Text, View, ActivityIndicator, SafeAreaView, FlatList, ListItem, ScrollView, Image } from 'react-native';
import Card from '../../components/Card';
import { LinearGradient } from 'expo-linear-gradient';


export default HomeScreen = (route) => {
  const { galleryId } = route.route.params;
  const [isLoading, setLoading] = useState(true);
  const [data, setData] = useState({});

  useEffect(() => {     //C'est un hook, ça lance la fonction dès que les components sont chargés
    fetch(`https://api.imgur.com/3/gallery/${galleryId}.json`, {headers:{'Authorization': 'Client-ID 1fbdce43e06d6a9'}})   //le '.json' est optionnel
      .then((response) => response.json())
      .then((json) => setData(json.data))  //Insert le resultat dans une variable 'data' à l'aide de la fonction useState() appellée plus haut
      .catch((error) => console.error(error))
      .finally(() => setLoading(false));
  }, []);

  return (
        <LinearGradient
          // Background Linear Gradient
          colors={['#03001e', '#7303c0', '#ec38bc', '#fdeff9']}
        >
          <ScrollView>
            <View style={styles.titlecontainer}>
              <Text style={styles.title}>{data.title}</Text>
            </View>
            <View>
              {isLoading ? <ActivityIndicator/> : (
                data.images.map((item, index)=>
                  <View key={index}>
                    <Card item={item}/>
                  </View>
                )
              )}
            </View>
          </ScrollView>
        </LinearGradient>
  );
};

const styles = StyleSheet.create({
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