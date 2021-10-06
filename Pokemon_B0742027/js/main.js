// 網頁的主程式寫在這裡
// 筆記

// 選擇class是nav-link的元素
// .class #id
// 並綁定點擊事件

//  $() => jQuery函數 function

$(".nav-link").click(function () {
    // 按鈕被點後要做的事...
    console.log("按鈕被點了")
    console.log("被點的按鈕是", this)
    // 取得目標
    // .attr("屬性名") 取得某個HTML屬性的值
    var target = $(this).attr("href")
    console.log("目標", target)
    // 取得移動座標
    var position = $(target).offset().top
    console.log("座標", position)
    // 執行動畫
    // .animate(物件, 時間)
    $("html,body").animate({
        scrollTop: position - 56
    }, 500)
})