@extends('layouts.app')

@section('link')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div id="page-main" class="container">
        <link rel="stylesheet" href="~../public/css/create" type="text/css">
        <style type="text/css">
            .tip {
                cursor: help;
                padding: 9px;
            }

            .tooltip {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 3;
                display: none;
                background-color: #F5F5B5;
                border: 1px solid #DECA7E;
                padding: 10px;
                width: 240px;
                color: #333;
            }

            .tips-highlight {
                width: 350px;
            }
        </style>
        <div id="page-main" class="container">
            <h1 class="page-header">创建日记本</h1>
            <div class="sidebar" style="width:450px;">
                <div class="sidebar-item">
                    <h2 class="title">什么是胶囊日记？</h2>
                    <p>
                        <b>胶囊日记</b>是一个记录生活的日记本。<br>
                        <br>
                        首先你需要建立一个胶囊日记本，公开或是私密，并为它设定一个期限，这个期限决定了这个日记本的“厚度”，然后你就可以开始写日记了。
                        你可以在上面记录喜悦，悲伤，发牢骚，流水账，甚至只是一张相片，一条电话号码。
                        之后你会发现，<b>一觉醒来，前一天你和所有人的日记都不见了</b>，放心，它们并没有被删除，只是存放在你建好的日记本里，
                        等到日记本“写满”那天，你所有的日记就都可以再次被浏览。<br>
                        <br>
                        我们欢迎真实生活的记录，欢迎心血来潮，不鼓励转载，不鼓励冲动灌水。<br>
                    </p>
                </div>
            </div>
            <div class="main" style="width: auto">
                <form action="{{url('create/save')}}" method="post" accept-charset="utf-8"
                      class="form-small form-create-book">
                    {{--定义csrf保护--}}
{{--                    {{ csrf_field() }}--}}
                  @csrf
                    <div class="err">
                    </div>
                    <label>主题</label>
                    {{--<input type="text" id="subject" name="subject" value="">--}}
                    <input type="text" id="subject" name="Diary[thetheme]" value="">
                    <p></p>
                    <p>
                        <label for="description">描述</label>
                        {{--<textarea id="description" name="description" cols="20" rows="2"></textarea>--}}
                        <textarea id="description" name="Diary[describe]" cols="20" rows="2"></textarea>
                    </p>

                    <label>过期时间</label>
                    {{--<input type="text" name="expired" class="date_input" value="2018-04-21">--}}
                    <input type="text" name="Diary[expirationtime]" class="date_input" value="2018-04-21">
                    <div class="date_selector" style="display: none;">
                        <div class="nav"><p class="month_nav"><span class="button prev" title="[Page-Up]">«</span> <span
                                        class="month_name">四月</span> <span class="button next"
                                                                           title="[Page-Down]">»</span></p>
                            <p class="year_nav"><span class="button prev" title="[Ctrl+Page-Up]">«</span> <span
                                        class="year_name">2018</span> <span class="button next"
                                                                            title="[Ctrl+Page-Down]">»</span></p></div>
                        <table>
                            <thead>
                            <tr>
                                <th>二</th>
                                <th>三</th>
                                <th>四</th>
                                <th>五</th>
                                <th>六</th>
                                <th>日</th>
                                <th>一</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="unselected_month" date="2018-03-26">26</td>
                                <td class="unselected_month" date="2018-03-27">27</td>
                                <td class="unselected_month" date="2018-03-28">28</td>
                                <td class="unselected_month" date="2018-03-29">29</td>
                                <td class="unselected_month" date="2018-03-30">30</td>
                                <td class="unselected_month" date="2018-03-31">31</td>
                                <td class="selectable_day" date="2018-04-01">1</td>
                            </tr>
                            <tr>
                                <td class="selectable_day" date="2018-04-02">2</td>
                                <td class="selectable_day" date="2018-04-03">3</td>
                                <td class="selectable_day" date="2018-04-04">4</td>
                                <td class="selectable_day" date="2018-04-05">5</td>
                                <td class="selectable_day" date="2018-04-06">6</td>
                                <td class="selectable_day" date="2018-04-07">7</td>
                                <td class="selectable_day" date="2018-04-08">8</td>
                            </tr>
                            <tr>
                                <td class="selectable_day" date="2018-04-09">9</td>
                                <td class="selectable_day" date="2018-04-10">10</td>
                                <td class="selectable_day" date="2018-04-11">11</td>
                                <td class="selectable_day" date="2018-04-12">12</td>
                                <td class="selectable_day" date="2018-04-13">13</td>
                                <td class="selectable_day" date="2018-04-14">14</td>
                                <td class="selectable_day" date="2018-04-15">15</td>
                            </tr>
                            <tr>
                                <td class="selectable_day" date="2018-04-16">16</td>
                                <td class="selectable_day" date="2018-04-17">17</td>
                                <td class="selectable_day" date="2018-04-18">18</td>
                                <td class="selectable_day" date="2018-04-19">19</td>
                                <td class="selectable_day" date="2018-04-20">20</td>
                                <td class="selectable_day selected" date="2018-04-21">21</td>
                                <td class="selectable_day" date="2018-04-22">22</td>
                            </tr>
                            <tr>
                                <td class="selectable_day" date="2018-04-23">23</td>
                                <td class="selectable_day" date="2018-04-24">24</td>
                                <td class="selectable_day" date="2018-04-25">25</td>
                                <td class="selectable_day" date="2018-04-26">26</td>
                                <td class="selectable_day" date="2018-04-27">27</td>
                                <td class="selectable_day" date="2018-04-28">28</td>
                                <td class="selectable_day" date="2018-04-29">29</td>
                            </tr>
                            <tr>
                                <td class="selectable_day" date="2018-04-30">30</td>
                                <td class="unselected_month" date="2018-05-01">1</td>
                                <td class="unselected_month" date="2018-05-02">2</td>
                                <td class="unselected_month" date="2018-05-03">3</td>
                                <td class="unselected_month" date="2018-05-04">4</td>
                                <td class="unselected_month" date="2018-05-05">5</td>
                                <td class="unselected_month" date="2018-05-06">6</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <a id="whats_expired" class="tip"
                       tip="给日记本设置一个完结日期，日记本完结后你才能浏览该日记本的所有日记，在此之前，每天凌晨零点，你写的日记将被隐藏，包括你自己在内任何人都无法浏览。">这是什么?
                        <div class="tooltip fixed" style="left: 356px; top: 256.2px; display: none;">
                            给日记本设置一个完结日期，日记本完结后你才能浏览该日记本的所有日记，在此之前，每天凌晨零点，你写的日记将被隐藏，包括你自己在内任何人都无法浏览。
                        </div>
                    </a>
                    <p></p>
                    <label>谁可以看到这个日记本？</label>
                    <select name="privacy">
                        <option value="10">大家</option>
                        <option value="1">我自己</option>
                    </select>
                    <p>
                        <input class="btn-submit" type="submit"  value="创建日记本">
                        <input class="btn-cancel" type="button" value="取消" onclick="javascript:history.back(-1);">
                    </p>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="~../public/css/create2"></script>
        <script type="text/javascript"
                src="http://www.timepill.net/js/date_input/translations/jquery.date_input.zh_CN.js"></script>
        <script type="text/javascript" src="~../public/css/create4"></script>
        <script type="text/javascript">
            $($.date_input.initialize);
            $.extend(DateInput.DEFAULT_OPTS, {
                stringToDate: function (string) {
                    var matches;
                    if (matches = string.match(/^(\d{4,4})-(\d{2,2})-(\d{2,2})$/)) {
                        return new Date(matches[1], matches[2] - 1, matches[3]);
                    } else {
                        return null;
                    }
                },

                dateToString: function (date) {
                    var month = (date.getMonth() + 1).toString();
                    var dom = date.getDate().toString();
                    if (month.length == 1) month = "0" + month;
                    if (dom.length == 1) dom = "0" + dom;
                    return date.getFullYear() + "-" + month + "-" + dom;
                }
            });

            var $expTip = $('#whats_expired');
            $expTip.simpletip({content: $expTip.attr('tip'), fixed: true, position: 'right'});
        </script>
    </div>