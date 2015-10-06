<?//echo $handl;?>
<!doctype html>
<html>
<head>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="UTF-8" >
  <title>Ошибочка</title>
  
<style>
*{
  margin:0;
  padding:0;
  font-size: 0;
}

.circle{
  width:400px;
  height:400px;
  margin: 10% auto 30px;
  border-radius:400px;
  background-color:#00796b;
  color:#fff;
  font-size:120px;
  line-height:3.3;
  text-align: center;
  -moz-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
}
.circle:hover{
  background-color:#fff;
  color:#00796b;
  
}
.text{
  text-align: center;
  color:#00796b;
  font-size:36px;
}
.text a{
  color:#00796b;
  font-size:36px;
}

@media (max-width: 960px) {
  
  .circle{
    width: 300px;
    height: 300px;
    margin: 10% auto 0;
    border-radius: 300px;
    font-size: 100px;
    line-height: 3;
  }
  .text{
  font-size:28px;
}
.text a{
  font-size:28px;
}
}
@media (max-width: 480px) {
  
  .circle{
    width: 200px;
    height: 200px;
    margin: 10% auto 0;
    border-radius: 200px;
    font-size: 80px;
    line-height: 2.5;
  }
  .text{
    font-size:20px;
  }
  .text a{
    font-size:20px;
  }
}
</style>
</head>

<body>
  <div class="circle">404</div>
  <div class="text">Возможно, виноваты <a href="http://rclp.ru/humans.txt">они</a>,<BR>можно перейти на <a href="/"> главную</a>
</body>