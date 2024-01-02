# Laravel 10 Blade 視圖的 SVG（可縮放式向量圖形）圖示顯示

引入 blade-ui-kit 的 blade-icons 套件來擴增 Blade 視圖的 SVG（可縮放式向量圖形）圖示顯示。SVG 是 W3C 制定的開放性網路標準之一，此圖片格式再網頁中能以向量格式呈現圖片。網頁設計師可先在 Adobe Illusrator 中畫好向量圖形並存成 SVG 檔，在放在網頁中。運用方式其實就跟 .jpg、.png、.gif 等圖片檔一樣，但不同的是 SVG 檔不會因尺寸的改變而失真，日後要修改時也可直接開啟檔案修改，相當方便。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/icon` 來進行 SVG 圖示顯示。

----

## 畫面截圖
![](https://i.imgur.com/7ubKikg.png)
> SVG 跟 JPG 點陣圖最大差別，是放大後不會有馬賽克鋸齒狀，對於製作 RWD 自適應網站時會非常方便，省下針對不同螢幕尺寸額外製圖
