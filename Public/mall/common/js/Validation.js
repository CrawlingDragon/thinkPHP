// 提示语定制
var langUserName1 = "用户名不能为空!";
var langUserName2 = "请输入正确的用户名!";
var langPeopleName1 = "姓名不能为空!";
var langPeopleName2 = "请输入正确的用户名!";
var langCardId1 = "身份证不能为空!";
var langCardId2 = "请输入正确的身份证!";
var langDetailAds1 = "详细地址不能为空!";
var langDetailAds2 = "详细地址错误!";
var langComName1 = "公司名字不能为空!";
var langComName2 = "请输入正确的公司名字!";
var langBisLicense1 = "公司营业执照不能为空!";
var langBisLicense2 = "请输入正确的公司营业执照!";
var langBisScope1 = "经营范围不能为空!";
var langCapital = "注册资本不能为空";
var langLoginAds = "注册地址不能为空";
var langCorporate = "法人代表不能为空";
var langSetupTime = "成立时间不能为空";
//身份证正则验证
 function IdentityCodeValid(code) { 
    var city={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江 ",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北 ",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏 ",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外 "};
    var tip = "";
    var pass= true;
    
    if(!code || !/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i.test(code)){
        tip = "身份证号格式错误";
        pass = false;
    }
    
   else if(!city[code.substr(0,2)]){
        tip = "地址编码错误";
        pass = false;
    }
    else{
        //18位身份证需要验证最后一位校验位
        if(code.length == 18){
            code = code.split('');
            //∑(ai×Wi)(mod 11)
            //加权因子
            var factor = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2 ];
            //校验位
            var parity = [ 1, 0, 'X', 9, 8, 7, 6, 5, 4, 3, 2 ];
            var sum = 0;
            var ai = 0;
            var wi = 0;
            for (var i = 0; i < 17; i++)
            {
                ai = code[i];
                wi = factor[i];
                sum += ai * wi;
            }
            var last = parity[sum % 11];
            if(parity[sum % 11] != code[17].toUpperCase()){
                tip = "校验位错误";
                pass =false;
            }
        }
    }
    if(!pass);
    return pass;
 }
//不能为空的判断
function isNone(x){
	var r = /^[^/ ]*$/;
	if(x.value==''|| x.value.replace(/(^\s*)|(\s*$)/g,"")==""){
		return false;
	}else{
		return true;
	}
}
