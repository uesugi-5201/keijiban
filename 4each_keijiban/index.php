<!DOCTYPE html>
<html lang ="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");
        $stmt = $pdo->query("select*from 4each_keijiban");
        ?>
        
       <div class="img_logo">
           <img src="4eachblog_logo.jpg">
       </div>
        <!-- header -->
        
        <header>
            
            <ul>
                <li>トップ  </li>
                <li>プロフィール  </li>
                <li>4eachについて  </li>
                <li>閲覧フォーム  </li>
                <li>問い合わせ  </li>
                <li>その他</li>
            </ul>
            
        </header>
        

        
        <!-- main -->
        
        <main>
            
            <!-- ここからleft -------------------------------------------->
                
            <div class="left"><!-- div1 -->
                    <h1><strong>プログラミングに役立つ掲示板</strong></h1>
                
            <!-- メインエリア -->
        
        <form method="post" action="insert.php">
            <div>
             <h2>入力フォーム</h2>
            </div>
                
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div> 
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
            
                     
                    
            
                   
        </form>
                
                
                    <?php
                    
                    while($row = $stmt->fetch()){
                    
                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                    }
                    
                    ?>
               
                
             
                
            </div><!-- div1-END ----------------------------------leftここまで----->
                        
                        <!-- ここからright ---------------------------------------->
        
                        <div class="right"><!-- div4 -->
                            <h3>人気の記事</h3>
                            <ul>
                                <li>PHP おすすめの本</li>
                                <li>PHP myadminの使い方</li>
                                <li>今人気エディタTPO5</li>
                                <li>HTMLの基礎</li>
                            </ul>
                            
                            <h3>おすすめリンク</h3>
                            <ul>
                                <li>インターノウス株式会社</li>
                                <li>XAMPPのダウンロード</li>
                                <li>Eclipsのダウンロード</li>
                                <li>Blackeysのダウンロード</li>
                            </ul>
                            
                            <h3>カテゴリ</h3>
                            <ul>
                                <li>HTML</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>JavaScript</li>
                            </ul>
              
             </div><!-- div4-END ----------------------------rightここまで--------->
                        
              
                

        
                    
        </main>
        
        <!-- footer -->
        
        <footer>
            <p>copylight(c)all right reserved internous 2015-2018</p>
        </footer>
     
    </body>
</html>