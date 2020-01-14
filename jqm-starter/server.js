var express = require("express");
var app = express();

app.use(express.static("./public"));

app.get("/", (req, res) => {
    res.sendFile("./public/index.php");
});

app.listen(3000, function(){
    console.log("SERVIDOR RODANDO VIOLENTAMENTE NA PORTA 3000");
});