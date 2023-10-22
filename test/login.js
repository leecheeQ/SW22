const express = require('express');
const app = express();
const mysql=require('mysql');
const pool=mysql.createPool({
	host:'127.0.0.1',
	port:'3306',
	user:'root',
	password:'',
	database:'login',
	connectionLimit:10
});
app.listen(8080);
app.use(express.static('./'));
app.use(express.urlencoded({
	extended:false
}));//将获取到的数据转化成对象
app.use((err,req,res,next)=>{
	console.log(err);
	res.status(404).send({code:404,msg:'糟糕！出错了！'})
})
