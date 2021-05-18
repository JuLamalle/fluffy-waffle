import React, { useEffect, useState } from 'react';
import { StyleSheet, Text, View, ActivityIndicator } from 'react-native';


export default HomeScreen = () => {
  const [isLoading, setLoading] = useState(true);
  const [data, setData] = useState([]);

  useEffect(() => {     //C'est un hook, ça lance la fonction dès que les components sont chargés
    fetch('https://api.imgur.com/3/gallery/NGZOQK5.json', {headers:{'Authorization': 'Client-ID 1fbdce43e06d6a9'}})   //le '.json' est optionnel
      .then((response) => response.json())
      .then((json) => setData(json.data))  //Insert le resultat dans une variable 'data' à l'aide de la fonction useState() appellée plus haut
      .catch((error) => console.error(error))
      .finally(() => setLoading(false));
  }, []);

  return (
    <View style={styles.container}>
      {isLoading ? <ActivityIndicator/> : (     //optionnel, on peut ne laisser que la balise <Text>
        <Text>
          L'id de la gallery est : {data.id}
        </Text>
      )}
    </View>
  );
};

const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
  });