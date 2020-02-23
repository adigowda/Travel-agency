
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body 
        {
            margin:0;
        }
	#contact {
    text-align: center;
    background: #21243d;
  }
   #inner {
    max-width: 600px;
    margin: auto;
    padding: 10px 20px 30px 20px;
  }
  #contact h1 {
    font-size: 40px;
    text-transform: uppercase;
    color: #ffffdd;
    margin-bottom: 30px;
    letter-spacing: 3px;
    font-weight: 500;
  }
  #name,
  #email,
  #message {
    border: none;
    outline: none;
    color: #fff;
    background: none;
    border-bottom: 1px solid #a7e9af;
    padding: 10px 6px;
    margin-bottom: 40px;
    font-size: 18px;
  }
  #name {
    width: 100%;
  }
  
  #email {
    width: 100%;
  }
  
  #message {
    border: 1px solid #a7e9af;
    margin-top: 30px;
    min-width: 100%;
    max-width: 100%;
    font-size: 24px;
  }
  #contact button {
    border: 1px solid #a0ffe6;
    background: none;
    color: #a0ffe6;
    padding: 12px 20px;
    border-radius: 8px;
    outline: none;
    color: white;
    transition: 0.4s linear;
    text-transform: uppercase;
    cursor: pointer;
    width: 50%;
    font-size: 16px;
    letter-spacing: 3px;
  }
  #contact button:hover {
    background-color: #a0ffe6;
    color: #000;
    border: 1px solid #000;
  }
</style>
</head>
<body>
<div id="contact">
        <div id="inner">
            <form action="blogsConnection.php" method="POST" id="form"  >
			<h1>Submit a Blog</h1>
			<input type="text" id="name" name="btitle" placeholder="Blog title">
			<input type="text" id="email" name="aname" placeholder="Author name">
            <textarea name="blog" id="message" rows="5" placeholder="Type your blog here"></textarea>
          <button type="submit" id="sub" >  Submit</button>
        </form>
        </div>
   
        

    </div>

</body>
</html>

