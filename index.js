const express = require("express");
const app = express();

app.listen(3000 , () =>{
    console.log("avvio");
});


app.get(  "/"  ,(req,res) =>{
    res.send("<h1>ciiooo</h1>");
})


app.get("/show" , (req,res) => {
    res.send("<h1> ciaooo : "+req.query.q + "</h1>")

});
