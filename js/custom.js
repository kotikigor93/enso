$(document).ready(function (e){
//
//     let text1 = "WEB development";
//     let text2 = "AI integration";
//     let text3 = "SEO";
//     let text4 = "Usability Audit";
//
//     let list1 = $('.list1');
//     let list2 = $('.list2');
//     let list3 = $('.list3');
//     let list4 = $('.list4');

    (function(){

        let svg = '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">' +
            '<path d="M11.5 5.5C11.5 8.22136 9.07941 10.5 6 10.5C2.92059 10.5 0.5 8.22136 0.5 5.5C0.5 2.77864 2.92059 0.5 6 0.5C9.07941 0.5 11.5 2.77864 11.5 5.5Z" fill="#FF7D7D" stroke="white"/>' +
            '</svg>';
        let text = [
            ('WEB development').split(''),
            ('AI integration').split(''),
            ('SEO').split(''),
            ('Usability Audit').split('')
        ];

        let list = [
            $('#list1'),
            $('#list2'),
            $('#list3'),
            $('#list4'),
        ];

        let time = 0;
        for(let i = 0; i < 4; i++){
            setTimeout( function(){
                newTime = textInter(text[i], list[i], svg);
            }, time);
            time = time+text[i].length*100;
            console.log(time);
        }


    })();

    function textInter(text,block,svg)
    {
        block.append(svg);
        for( let i = 0; i < text.length; i++ ){
            setTimeout( function(){
                block.append(text[i]);
            }, i*100);
        }

        return text.length;
    }
});
