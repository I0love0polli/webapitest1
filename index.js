const express = require("express");
const app = express();
const port = process.env.PORT || 3000;



app.get(  "/"  ,(req,res) =>{
    res.send("<h1>ciiooo</h1>");
})


app.get(port , () => {
    console.log(`Server is running on port ${port}`);

});