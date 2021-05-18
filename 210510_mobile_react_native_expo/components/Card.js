// item prop is data.images from an imgur gallery api call
import React from 'react'
import { View, Text, ListItem, Image, StyleSheet } from "react-native"

const Card = ({item}) => {
    return (
        <View style={styles.card}>
            <View>
                <Image source={{ uri: item.link }} style={styles.image} />
            </View>
            <View style={styles.cardtext}>
                <Text>{item.title}</Text>
                <Text style={styles.desc}>{item.description}</Text>
            </View>
        </View>
    )
}

const styles = StyleSheet.create({
    card: {
        alignItems: 'center',
        justifyContent: 'center',
    },
    cardtext: {
        backgroundColor: '#ffe6f2',
        alignItems: 'center',
        justifyContent: 'center',
        marginTop: 1,
        marginBottom: 4,
        marginHorizontal: 10,
        paddingHorizontal: 4,
        paddingVertical: 2,
        borderWidth: 2,
        borderColor: 'purple',
        borderRadius: 15
    },
    image: {
        width: 300,
        height: 300,
        borderWidth: 1,
        borderColor: 'grey',
        borderRadius: 6,
        marginTop: 6
    },
    desc: {
        fontFamily: 'Assistant_400Regular',
        paddingHorizontal: 10,
        paddingBottom: 10
    }
});

export default Card