$(function () {
  $(window).on('load', function (){
    startTimer();
  });
  //////////  スライドリストの合計幅を計算 → CSSでエリアに代入
  let width = $('.carousel-list').outerWidth(true); // .carousel-listの1枚分の幅
  let length = $('.carousel-list').length; // .carousel-listの数
  let slideArea = width * length; // レール全体幅 = スライド1枚の幅 × スライド合計数
  $('.carousel-area').css('width', slideArea); // カルーセルレールに計算した合計幅を指定

  //////////  スライド現在値と最終スライド
  //なぜこの「slideCurrent」変数がインデックスとして認知されてるのか？
  let slideCurrent = 0; // スライド現在値（1枚目のスライド番号としての意味も含む）
  let lastCurrent = $('.carousel-list').length - 1; // スライドの合計数＝最後のスライド番号

  function changeslide() {
    $('.carousel-area').stop().animate({ // stopメソッドを入れることでアニメーション1回毎に止める
      //「js-btn-back」で0番をクリックする。そしたら4番目のスライドに上書きされて、「changeslide()」関数が実行される。
      //ただ、実行時に関数には4枚目が入ってきて、-widthになると3番目が表示されるのではないのか？
      //leftとあるのに、どうやって右送りを制御してるのか？
      left: slideCurrent * -width // 代入されたスライド数 × リスト1枚分の幅を左に動かす
      // left: slideCurrent * -width
    });
   };

   ////////////　ボタンクリック時「changeslide」関数を呼び出し
// NEXTボタン
  $('.js-btn-next').click(function () {
    stopTimer();
    //スタートタイマーはifの前に置くとは早くにタイマーがスタートし、あとに置くと遅くスタート？それとも処理は全て同時？？
    startTimer();
    if (slideCurrent === lastCurrent) { // 現在のスライドが最終スライドの場合
      slideCurrent = 0;
      changeslide(); // スライド初期値の値を代入して関数実行（初めのスライドに戻す）
    } else {
      slideCurrent++;
      changeslide(); // そうでなければスライド番号を増やして（次のスライドに切り替え）関数実行
    };
  });
  // BACKボタン
  $('.js-btn-back').click(function () {
    stopTimer();
    startTimer();
    if (slideCurrent === 0) { // 現在のスライドが初期スライドの場合
      slideCurrent = lastCurrent;
      changeslide(); // 最終スライド番号を代入して関数実行（最後のスライドに移動）
    } else {
      slideCurrent--;
      changeslide(); // そうでなければスライド番号を減らして（前のスライドに切り替え）関数実行
    };
  });
  let Timer;  // 変数Timer
////////// 一定時間毎に処理実行する「startTimer」として関数を定義
function startTimer() {
  // 変数Timerに下記関数内容を代入する
  Timer = setInterval(function () { // setInterval・・・指定した時間ごとに関数を実行
    if (slideCurrent === lastCurrent) {
      slideCurrent = 0;
      changeslide();
    } else {
      slideCurrent++;
      changeslide();
    };
  }, 3000); // 上記動作を3秒毎に
};
////////// 「startTimer」関数を止める「stopTimer」関数を定義
function stopTimer() {
  clearInterval(Timer); // clearInterval・・・setIntervalで設定したタイマーを取り消す
};
});