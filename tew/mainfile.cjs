const express = require('express')
const app = express()


app.set('view engine', 'ejs')
app.set ('views','./tempaltes')
app.use("/icons", express.static('icons'))

app.use("/style", express.static("style"));

app.get('/', function (req, res) {
  res.render('add.ejs')
})


let port=3001
app.listen(port,  () => {console.log (`Cервер запущен ${port}`)})
