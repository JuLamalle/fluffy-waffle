
import { PrismaClient } from '@prisma/client'
import express from 'express'
const morgan = require('morgan')
const jwt = require('jsonwebtoken')
const cors = require('cors')

//For production, keep it in a .env file or smth to not share it
const SECRET = 'mykey'

const prisma = new PrismaClient()
const app = express()

app.use(cors())                                 // Activation de CORS
app.use(morgan('tiny'))                         // Activation de Morgan
app.use(express.json())                         // Activation du raw (json)
app.use(express.urlencoded({ extended: true })) // Activation de x-wwww-form-urlencoded

/* Récupération du header bearer */
const extractBearerToken = headerValue => {
    if (typeof headerValue !== 'string') {
        return false
    }

    const matches = headerValue.match(/(bearer)\s+(\S+)/i)
    return matches && matches[2]
}

/* Vérification du token */
const checkTokenMiddleware = (req, res, next) => {
    // Récupération du token
    const token = req.headers.authorization && extractBearerToken(req.headers.authorization)

    // Présence d'un token
    if (!token) {
        return res.status(401).json({ message: 'Error. Need a token' })
    }

    // Véracité du token
    jwt.verify(token, SECRET, (err, decodedToken) => {
        if (err) {
            res.status(401).json({ message: 'Error. Bad token' })
        } else {
            return next()
        }
    })
}

app.post('/login', async (req, res) => {
    // Pas d'information à traiter
    if (!req.body.email || !req.body.password) {
        return res.status(400).json({ message: 'Error. Please enter the correct email and password' })
    }

    // Checking
    // const user = users.find(u => u.email === req.body.email && u.password === req.body.password)
    const { email, password} = req.body
    const user = await prisma.user.findFirst({
        where: {
            email: email,
            password: password 
        }
    })

    // Pas bon
    if (!user) {
        return res.status(400).json({ message: 'Error. Wrong login or password' })
    }

    const token = jwt.sign({
        id: user.id,
        email: user.email,
        first_name: user.first_name,
        last_name: user.last_name,
        admin: user.admin
    }, SECRET, { expiresIn: '3 hours' })

    return res.json({ access_token: token })
})

app.get('/me', checkTokenMiddleware, (req, res) => {
    // Récupération du token
    const token = req.headers.authorization && extractBearerToken(req.headers.authorization)
    // Décodage du token
    const decoded = jwt.decode(token, { complete: false })

    return res.json({ user: decoded })
})

app.post('/register', async (req, res) => {
  const { first_name, last_name, email, password, admin} = req.body
  console.log(req.body)
  const user = await prisma.user.create({
    data: {
      first_name,
      last_name,
      email,
      password,
      admin
    }
  })
  res.status(200).json(user)
})

app.get('/users', async (req, res, next) => {
  try {
    let users = await prisma.user.findMany()

    res.send(users)

  } catch (error) {
    next(error)
  }
})

app.delete(`/user/:id`, async (req, res) => {
  const { id } = req.params
  const post = await prisma.user.delete({
    where: {
      id: parseInt(id),
    },
  })
  res.json(post)
})

app.put(`/user/:id`, async (req, res) => {
  const { id, first_name, last_name, email } = req.params
  const updateUser = await prisma.user.update({
    where: {
      id: Number(id),
    },
    data: {
      first_name: first_name,
      last_name: last_name,
      email: email
    }
  })  
  res.json(updateUser)
})

/*app.post('/post', async (req, res) => {
  const { title, content, authorEmail } = req.body
  const post = await prisma.post.create({
    data: {
      title,
      content,
      author: {
        connectOrCreate: {
          email: authorEmail
        }
      }
    }
  })
  res.status(200).json(post)
})

app.get('/drafts', async (req, res) => {
  const posts = await prisma.post.findMany({
    where: { published: false },
    include: { author: true }
  })
  res.json(posts)
})

app.get('/post/:id', async (req, res) => {
  const { id } = req.params
  const post = await prisma.post.findUnique({
    where: {
      id: Number(id),
    },
    include: { author: true }
  })
  res.json(post)
})

app.put('/publish/:id', async (req, res) => {
  const { id } = req.params
  const post = await prisma.post.update({
    where: {
      id: Number(id),
    },
    data: { published: true },
  })
  res.json(post)
})

app.get('/feed', async (req, res) => {
  const posts = await prisma.post.findMany({
    where: { published: true },
    include: { author: true },
  })
  res.json(posts)
})

app.delete(`/post/:id`, async (req, res) => {
  const { id } = req.params
  const post = await prisma.post.delete({
    where: {
      id: parseInt(id),
    },
  })
  res.json(post)
})

app.get('/filterPosts', async (req, res) => {
  const { searchString } = req.query
  const draftPosts = await prisma.post.findMany({
    where: {
      OR: [
        {
          title: {
            contains: searchString,
          },
        },
        {
          content: {
            contains: searchString,
          },
        },
      ],
    },
  })
  res.send(draftPosts)
})*/

/** 
* logic for our api will go here
*/
export default {
  path: '/api',
  handler: app
}