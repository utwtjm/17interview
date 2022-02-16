# 假定有 posts 與 comments 兩張 table。posts 有 title, content 兩個欄位，comments 有 messages 欄位。請以 laravel 設計並實作新增 comment 與 post 的 api ，並將 comments 與 posts 相關聯。缺少的欄位可自行補足，實作能以 github 等方式提供。

```

sql/101.sql 為 table schema

```

# PHP 當中的 interface 和 abstract ，分別適合於什麼時機使用。請描述對於這兩個保留字的看法。

## interface

```

定義 class 的行為，不能有實作

```

## abstract

```

定義 class 的行為，有實作，子類別也可以覆寫

```

# Laravel 當中的 middleware 能夠在進入 controller 和離開 controller 後提供額外的操作，參考官方文件 。若換成自己設計類似的 middleware ，請描述一下會如何設計以及設計的做法。

```

根目錄的 example.php，是我目前想到的作法 

```