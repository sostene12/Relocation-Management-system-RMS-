<!DOCTYPE html>
<html lang="en">
<head>
<script src="ckeditor/ckeditor.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea {
            margin-left:500px;
            position:relative;
            text-align:center;
            align-items:center;
            justify-content:center;
        }
        button{
            display:block;
            margin-left:200px;
        }
        
.cke_chrome {
    display: block;
    border: 1px solid #d1d1d1;
    margin-left: 300px;
    margin-top:30px;
    padding: 0;
}
        div.editor {padding-left:240px;}
    </style>
</head>
<body>
    <form action="">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <button  type="submit">POST</button>
        <script style="margin-left:300px;">
CKEDITOR.replace( 'content' ).left="300px";

</script>
    </form>
    


</body>
</html>