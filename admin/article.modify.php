<?php
require("../connect.php");
// 读取旧信息
$id = $_GET["id"];
$query = mysql_query("select * from article where id=$id");
$data = mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章修改页</title>
    <style>
        .form1 {
            width: 500px;
            margin: 0 auto;
        }
        .form1 .articleManage {
            display: block;
            text-align: center;
        }
        .form1 .articleManage a {
            display: inline-block;
            padding: 10px;
            margin: 10px 10px 10px 0;
            background: #00CC66;
        }
        .form1 label {
            display: inline-block;
            width: 80px;
            text-align: right;
            margin: 10px 0;
        }
        .form1 textarea {
            vertical-align: text-top;
            max-width: 400px;
        }
        .form1 .submit {
            width: 50px;
            display: block;
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            background: #00CC66;
        }
    </style>
</head>
<body>
<form id="form1" name="form1" class="form1" method="post" action="article.modify.handle.php">
    <div class="articleManage">
        <a id="articlePublishBtn" class="articleManage">发布文章</a>
        <a id="articleManageBtn" class="articleManage">管理文章</a>
    </div>
    <label>标题：</label><input id="articleTitle" name="articleTitle" type="text" value="<?php echo $data["title"] ?>"><br/>
    <label>作者：</label><input id="articleAuthor" name="articleAuthor" type="text" value="<?php echo $data["author"] ?>"><br/>
    <label>简介：</label><textarea id="articleDescription" name="articleDescription" rows="3" cols="50"><?php echo $data["description"] ?></textarea><br/>
    <label>内容：</label><textarea id="articleContent" name="articleContent" rows="10" cols="50"><?php echo $data["content"] ?></textarea><br/>
    <button id="submit" class="submit" type="submit">提交</button>
    <input type="hidden" name="articleID" value="<?php echo $data["id"] ?>">
</form>
</body>
</html>