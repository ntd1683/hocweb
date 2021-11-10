document.getElementById('input_number').onkeydown = function(a){
    if(a.keyCode==13){
        button_push();
    }
};
let d=0;
let array=[];
function array_match(n){
    for(let i=0;i<array.length;i++){
        if(n==array[i]){
            return 0;
        }
    }
    return 1;
}
function random_match(n){
    do{
        n=Math.round(Math.random()*20);
        if(array_match(n)==1){
            return n;
        }
    }while(array_match(n)==0);
}
function button_push(){
    let rand;
    let rand_experiment;
    let s=0;
        let number=parseInt(document.getElementById('input_number').value);
        if(number<=0||number>=22||d==20){
            if(number<=0)
            alert('Số phần tử phải dương');
            else if(number>=22){
                alert('Mảng chỉ dao động từ 0 đến 20 và không được trùng');
            }
            else if(d==20){
                alert('Tổng số mảng in ra chỉ bao gồm 20 giá trị ');
                alert('Vui lòng reset lại');
            }
            document.getElementById('input_number').value='';
            return;
        }
    for(let i=0;i<number;i++){
        rand=random_match(rand);
        array.push(rand);
    }
    let a=array[0];
    let b=array[0];
    for(let j=0;j<array.length;j++){
        if(a<array[j]){
            a=array[j];
        }
        if(b>array[j]){
            b=array[j];
        }
        s+=array[j];
    }
	d+=number;
    document.getElementById('result1').innerHTML='Mảng : ' + array;
    document.getElementById('result2').innerHTML= '<br>'+'GTLN (MAX) trong mảng : '+a;
    document.getElementById('result3').innerHTML='<br>'+'GTNN (MIN) trong mảng : '+b;
    document.getElementById('result4').innerHTML='<br>'+'Tổng Mảng : '+s;
}
function reset(){
    location.reload();
}