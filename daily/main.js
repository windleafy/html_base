var ENDPOINT = 'https://api.taotaoxi.cn';

function httpSendMsg(url,handle){
    var xhr = new XMLHttpRequest();
    xhr.timeout = 10000;
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status >= 200 && xhr.status < 400) {
                var response = xhr.responseText;
                handle(response,xhr.status,xhr);
            }
        }
    };
    xhr.onerror = function (res) {
        console.log("onerror");
    }
    xhr.open("GET", url, true);
    xhr.send();
}

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return decodeURIComponent(r[2]);
    return null;
};

onload = function(){
    //年
    var n_yearlb = document.getElementById("n_yearlb");
    //月日
    var n_monthlb = document.getElementById("n_monthlb");
    //天机
    var tianjilb = document.getElementById("tianjilb");
    
    var tianjideclb = document.getElementById("tianjideclb");
    //描述
    var desclb = document.getElementById("desclb");
    //日
    var daylb = document.getElementById("daylb");
    //日期
    var riqilb = document.getElementById("riqilb");
    //宜忌
    var shiyilb = document.getElementById("shiyilb");

    var date = new Date();
    var time = "" + date.getFullYear() + (date.getMonth() + 1) + date.getDate();
    time = parseInt(time).toString(16);
    var uid = getQueryString("uid");
    if (!uid) {
        uid = 11518
    }
    var openidTime = (uid + time).toUpperCase();

    function getLotReport(openidTime,callback){

        var url = ENDPOINT + '/lot-report';
        var params = {};
        var url = url + "?seed=" + openidTime
        httpSendMsg(url,callback);
    }

    function getTianjiDesc(str){
        var desc = "";

        var titleStr = "太阳化忌|太阴化忌|廉贞化忌|巨门化忌|天机化忌|文曲化忌|天同化忌|文昌化忌|武曲化忌|贪狼化忌";
        var descStr = "易受瞒骗，被误会|财物受损，有隐忧|伤感情，会惹官非|口角是非，抢风头|计划失误，易惊慌|说错话，易被毁约|易自卑，享乐出事|会写错字，易毁约|周转困难，金属伤|被夺爱，嗜好惹祸";
        var list = titleStr.split("|");
        var list1 = descStr.split("|");
        var index = list.indexOf(str);
        if (index != -1) {
            desc = list1[index];
        }
        return desc;
    }

    getLotReport(openidTime,(data)=>{
        data = JSON.parse(data);
        if (data.dayOfWeek == 2) {
            dayOfWeek = "一"
        }
        else if (data.dayOfWeek == 3) {
            dayOfWeek = "二"
        }
        else if (data.dayOfWeek == 4) {
            dayOfWeek = "三"
        }
        else if (data.dayOfWeek == 5) {
            dayOfWeek = "四"
        }
        else if (data.dayOfWeek == 6) {
            dayOfWeek = "五"
        }
        else if (data.dayOfWeek == 7) {
            dayOfWeek = "六"
        }
        else if (data.dayOfWeek == 1) {
            dayOfWeek = "日"
        }
        if (data.day < 10) {
            data.day = "0" + data.day
        }
        var text = [];
        var tianjiDesc ="";
        if (!text[1]) {
            text[1] = data.cYear + "年";
            text[1] = text[1][0] + "\n" + text[1][1] + "\n" + text[1][2];
            text[2] = data.cMonth + "月";
            text[2] = text[2][0] + "\n" + text[2][1] + "\n" + text[2][2];
            text[3] = data.cDay + "日";
            text[3] = text[3][0] + "\n" + text[3][1] + "\n" + text[3][2];
            text[4] = data.year + "年" + data.month + "月 周" + dayOfWeek;
            text[5] = data.day;
            text[6] = data.huaJi;
            tianjiDesc = getTianjiDesc(data.huaJi);
            text[6] = text[6][0] + "\n" + text[6][1] + "\n" + text[6][2] + "\n" + text[6][3];
            text[7] = data.yiJi + "  " + data.yiJiContent;
            text[8] = data.sentence;
            text[8] = "\t\t\t\t" + text[8];
            /*
            if (text[8].length >= 18) {
                if (text[8].length >= 33) {
                    text[8] = text[8].slice(0, 18) + "\n" + text[8].slice(18, 33) + "\n" + text[8].slice(33, text[8].length);
                } else {
                    text[8] = text[8].slice(0, 18) + "\n" + text[8].slice(18, text[8].length);
                }
            }
            */
        }
        n_yearlb.innerHTML = text[1];
        n_monthlb.innerHTML = text[2] + text[3];
        riqilb.innerHTML = text[4];
        daylb.innerHTML = text[5];
        tianjilb.innerHTML = text[6];
        shiyilb.innerHTML = text[7];
        desclb.innerHTML = text[8];
        tianjideclb.innerHTML = tianjiDesc;
    });


}
