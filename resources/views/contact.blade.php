<!DOCTYPE html>
<html>
    <head>
        <title>お問い合わせ</title>
        <meta charset="utf-8">
        <meta name="description" content="お問い合わせ先">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>

    <body style="padding: 60px 0;">
        <header>
            <h1>お問合せ</h1>
        </header>
       
        <section>
        <form action="store" method="post">
        @csrf
            <div class="form-group mb-3">
                <div>
                    <label>名前</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="name" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                <label>フリガナ</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="hurigana" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                    <label>メールアドレス</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="email" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                    <label>電話番号</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="tel" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                  <label>お問い合わせ内容</label>
                  <br>
                </div>
                <div>
                  <textarea class="form-control" placeholder="入力してください" name="message"></textarea>

                </div>
            </div>
            
            <div>
                <input type="submit" class="btn btn-outline-primary" value="送信">
            </div>
        </form>
        </section>
        <a href="index">top</a>
     </body>
</html>
