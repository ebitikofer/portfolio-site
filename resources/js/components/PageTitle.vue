<template>

    <div>
        <div class="title m-b-md-ind">
            <h1>
                <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im Eric.", "I play the drums.", "I write code.", "I make art." ]'>
                    <span class="spacer"></span><span class="words"></span><span class="wrap"></span>
                </a>
            </h1>
        </div>

        <!-- <div class="title m-b-md-ind">
            <a id="l1">E</a><a id="l2">r</a><a id="l3">i</a><a id="l4">c</a>
            <a id="l6">B</a><a id="l7">i</a><a id="l8">t</a><a id="l9">i</a><a id="l10">k</a><a id="l11">o</a><a id="l12">f</a><a id="l13">e</a><a id="l14">r</a>
        </div> -->
    </div>

</template>

<script>

    export default {

        mounted() {
            console.log('Component mounted.')

        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="spacer"></span><span class="words">'+this.txt+'</span><span class="wrap"></span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
            }

            setTimeout(function() {
            that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border: 0.01em solid #fff; border-radius: 0.02em }";
            document.body.appendChild(css);
        };

        },

        typingAnimation(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        }

    }

</script>

<style>

    @keyframes blinkTextCursor{
        from { border-color: rgba(255, 255, 255, .75); }
        to { border-color: transparent; }
    }

    html, body {
        background-color: #344046;
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        /* background-color:#ce3635; */
        text-align: center;
        color:#fff;
        /* padding-top:10em; */
    }

    * {
        color:#fff; text-decoration: none;
    }

    .words {
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        /* margin: 0px 5px; */
    }

    .wrap {
        height: 60px;
        margin: 0px 5px
    }

    .spacer {
        height: 60px;
        margin: 0px 5px
    }

    .typewrite > .wrap {

        animation: blinkTextCursor 1000ms steps(2) infinite normal;
    }

    .m-b-md-ind {
        margin-bottom: 100px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .scaled-thumb {
        object-fit: scale-down;
        width: 25vw;
        /* height: 20vw; */
    }

    #l1 {
        animation: 1s ease-out 10s 1 slideInFromTop;
    }

</style>
