<!DOCTYPE html>
<html>

<head>
    <title>การเก็บข้อมูลผู้ใช้</title>
</head>

<body>

    <h2>มีผู้ใช้ส่งข้อมูลหาคุณ </h2>
    <hr>
    <div class="row">
        <div class="col-12"> <h2> ชื่อ : {{ $name }}. </h2></div>
    </div>

    <div class="row">
        <div class="col-12"> <h2> เลือกรถแบบ :  {{ $type }}. </h2></div>
    </div>

    <div class="row">
        <div class="col-12"> <h2> เวลา : {{ $time }}. </h2></div>
    </div>

    <div class="row">
        <div class="col-12"> <h2> เบอร์โทร : {{ $phone }}. </h2></div>
    </div>

	

</body>

<style type="text/css"  rel="stylesheet" media="all">
    /*
  ======================
  12 Columns Grid System
  ======================
  by Kaíque Zimerer

  This is a simple 12 Columns Grid System
  made with pure CSS.

  Enjoy it!
*/

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
        font-size: 1.1em;
    }

    .container {
        width: 100%;
    }

    .row {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin-top: 5px;
    }

    /* content */
    .row div {
        background-color: #EF5350;
        padding: 3%;
        border: 1px solid white;
        border-radius: 5px;
        text-align: right;
        color: white;
        transition: background-color 1s;
    }

    .row div:nth-child(2n):hover {
        background-color: #42A5F5;
    }

    .row div:nth-child(2n+1):hover {
        background-color: #66BB6A;
    }

    /* 1/12 */
    .col-1 {
        width: 8.33%;
    }

    /* 2/12 */
    .col-2 {
        width: 16.66%;
    }

    /* 3/12 */
    .col-3 {
        width: 25%;
    }

    /* 4/12 */
    .col-4 {
        width: 33.33%
    }

    /* 5/12 */
    .col-5 {
        width: 41.66%;
    }

    /* 6/12 */
    .col-6 {
        width: 50%;
    }

    /* 7/12 */
    .col-7 {
        width: 58.33%;
    }

    /* 8/12 */
    .col-8 {
        width: 66.66%;
    }

    /* 9/12 */
    .col-9 {
        width: 75%;
    }

    /* 10/12 */
    .col-10 {
        width: 83.33%;
    }

    /* 11/12 */
    .col-11 {
        width: 91.66%;
    }

    /* 12/12 */
    .col-12 {
        width: 100%;
    }

    /* viewport <= 1000px */
    @media screen and (max-width: 1000px) {
        * {
            font-size: 1em;
        }
    }

    /* viewport <= 630px */
    @media screen and (max-width: 630px) {
        .row div {
            padding: 1.5%;
        }
    }

    /* viewport <= 500px */
    @media screen and (max-width: 500px) {
        * {
            font-size: 0.9em;
        }
    }

</style>

</html>
