### Filelist
1. OpenChallenge01.html
2. Practice01.html
3. Practice02.html
4. Practice03.html
5. Practice04.html
6. Elvis.PNG
7. Me.JPG

### OpenChallenge01.html
```HTML
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>나의 소개</title>
    <style>
        body {
            margin: 0 auto;
            width: 70vw;
            background-color: rgb(184, 145, 228);
        }
        h1 {
            display: inline-block;

        }
        div:first-child {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
        }
        div:nth-child(2) {
            height: 10px;
            background-color: white;
            margin: 0 auto;
        }
        img {
            width: 200px;
        }
        .show {
            display: none;
        }
    </style>
</head>
<body>
    <div>
        <h1>이재민</h1>
    </div>
    <div></div>
    <img src="Me.JPG" alt="MyPic"
    class="show" >
    <p>
        저는 창원시 마산에서 태어나서 경성대학교 소프트웨어학과로 와
        컴퓨터공학을 공부하고 있습니다. 저는 나중에 취업해 컴퓨터비전 분야의
        AI 모델 설계를 하고 싶습니다.
    </p>
    <script>
        const h1 = document.querySelector("h1");
        const img = document.querySelector(".show");
        const handleMouseOver = () => {
            img.classList.remove("show");
        };
        const handleMouseLeave = () => {
            img.classList.add("show");
        };
        h1.addEventListener("mouseover", handleMouseOver);
        h1.addEventListener("mouseleave", handleMouseLeave);
    </script>
</body>
</html>
```
저는 querySelector로 객체를 지정해 거기에 이벤트핸들러를 달아주는
방식으로 진행했습니다. 그 방식에 익숙하여, 클래스명을 부여하고
뺴는 방식으로 코드를 구성했습니다.

### Practice01.html
```HTML
<!-- HTML 정답 1: DOCTYPE 선언 문법 오류 -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>오류를 찾으세요</title>
    <style>
        h3 { text-align: center; color: darkred; }
        /*
            CSS 정답 1: span의 color Property의 Assign이 잘못된
            연산자를 사용함
        */
        span { color: blue; font-size: 20px; }
        /* HTML 정답 2: style의 닫는 태그가 없음 */
    </style>
</head>
<body>
    <h3>Elvis Presley</h3>
    <p>
        He was an American singer and actor. In November 1956,
        he is often referred to as "<span>the King of Rock and Roll</span>".
    </p>
</body>
</html>
```
### Practice02.html
```HTML
<!DOCTYPE html>
<html lang="ko">
<!-- HTML 정답 1: 여는 태그명 오류 -->
<head>
    <meta charset="UTF-8">
    <title>오류를 찾으세요</title>
    <style>
        /* CSS 정답 1: 세미콜론 누락 */
        h3 { text-align: center; color: darkred; }
        span { color: blue; font-size: 20px; }
    </style>
</head>
<body>
    <!-- HTML 정답 2: 닫는 태그명 오류 -->
    <h3>Elvis Presley</h3>
    <p>
        He was an American singer and actor. In November 1956,
        he is often referred to as "<span>the King of Rock and Roll</span>".
    </p>
</body>
</html>
```
### Practice03.html
```HTML
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>웹 페이지의 구성 요소</title>
    <style>
        body {
            background-color: linen;
            color: green;
            margin: 0 40px;
        }
        h3 {
            text-align: center;
            color: darkred;
        }
        hr {
            height: 10px;
            border: solid grey;
            background-color: grey;
        }
        span {
            color: violet;
            font-size: 20px;
        }
        
    </style>
</head>
<body>
    <h3>Elvis Presley</h3>
    <hr>
    <p>
        He was an American singer and actor. In November 1956,
        he made his film debut in <span>Love Me Tender.</span>
        He is often referred to as "<span>the King of Rock and Roll</span>".
    </p>
</body>
</html>
```
### Practice04.html
```HTML
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>웹 페이지의 구성 요소</title>
    <style>
        body {
            background-color: linen;
            color: green;
            margin: 0 40px;
        }
        h3 {
            text-align: center;
            color: darkred;
        }
        hr {
            height: 5px;
            border: solid grey;
            background-color: grey;
        }
        span {
            color: blue;
            font-size: 20px;
        }
        img {
            width: 77px;
        }
    </style>
</head>
<body>
    <h3>Elvis Presley</h3>
    <hr>
    <img src="Elvis.PNG" alt="Elvis's Pic">
    <p>
        He was an American singer and actor. In November 1956,
        he made his film debut in <span onmouseover="show()"
        onmouseout="hide()" >Love Me Tender.</span>
        He is often referred to as "<span>the King of Rock and Roll</span>".
    </p>
    <script>
        const show = () => {
            document.querySelector("img").src = "./Me.JPG";
        };
        const hide = () => {
            document.querySelector("img").src = "./Elvis.PNG";
        };
    </script>
</body>
</html>
```
