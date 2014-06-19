<?php
// サイトコード
Vizualizer_Configure::set("timezone", "Asia/Tokyo");

// サイトコード
Vizualizer_Configure::set("site_code", "affiliate");

// サイト名
Vizualizer_Configure::set("site_name", "アフィリエイトシステム");

// サイトメールアドレス
Vizualizer_Configure::set("site_email", "minagawa@dot-hacks.com");

// アクセスドメイン
Vizualizer_Configure::set("site_domain", $_SERVER["SERVER_NAME"]);

// サイトホームディレクトリ
Vizualizer_Configure::set("site_home", realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "..") . DIRECTORY_SEPARATOR . "templates");

// データベースの接続設定
Vizualizer_Configure::set("database", array(
    "default" => array(
        "read" => array(
            "dbtype" => "mysql", "host" => "127.0.0.1",
            "user" => "viz_affiliate", "password" => "viz_affiliate",
            "database" => "viz_affiliate", "query" => "SET NAMES utf8"
        ),
        "write" => array(
            "dbtype" => "mysql", "host" => "127.0.0.1",
            "user" => "viz_affiliate", "password" => "viz_affiliate",
            "database" => "viz_affiliate", "query" => "SET NAMES utf8"
        )
    )
));

// 機能名
Vizualizer_Configure::set("affiliate_conversion_charge_rate", "25");
