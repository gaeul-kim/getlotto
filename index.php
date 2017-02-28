<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="로또, 로또 생성기, 로또 추출기, 로또번호, 로또번호 생성기, 로또번호 추출기,로또 랜덤, 로또 자바스크립트">
    <meta name="description" content="JavaScript, CSS를 이용해서 만든 로또번호 생성기">
    <link rel="stylesheet" href="css/ui.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <title>로또번호 생성기</title>
</head>

<body>
    <header>
        <h1>Get Lotto!</h1> </header>
    <section class="main_container">
        <div style="text-align:center">
            <? require("winnumbers.php"); ?>
        </div>
        <div class="number_container">
            <table class="number">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="button_container">
            <select name="" id="select_count">
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>` </select>
            <input class="button" type="button" value="생성" id="btn_create">
            <input class="button" type="button" value="설정" id="btn_option">
            <!--            <input class="button" type="button" value="전체해제" id="btn_select">-->
            <input class="button" type="button" value="삭제" id="btn_reset"> </div>
        <div class="option_container">
            <div class="option1">
                <table class="option_number">
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>32</td>
                        <td>33</td>
                        <td>34</td>
                        <td>35</td>
                        <td>36</td>
                        <td>37</td>
                        <td>38</td>
                        <td>39</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>42</td>
                        <td>43</td>
                        <td>44</td>
                        <td>45</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="result_container">
            <div class="show">
                <table class="result">
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </section>
    <footer> <a href="getlotto.woobi.co.kr">getlotto.woobi.co.kr</a> </footer>
    <script src="js/getlotto.js"></script>
</body>

</html>