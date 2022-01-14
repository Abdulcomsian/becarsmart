@extends('frontend.layouts.master')
@section('title')
BeCarSmart | index
@endsection
@section('css')
<style>
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "";
    }


    .slider-area {
        margin-top: 30px;
    }

    .single-slider h3 {
        font-size: 15px;
        text-align: center;
        margin-top: 18px;
    }


    button.slick-prev.slick-arrow {
        position: relative;
        width: 30px;
        overflow: hidden;
        background: transparent;
        border: 0;
        position: absolute;
        left: 0px;
        right: auto;
        z-index: 11;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
    }

    button.slick-prev.slick-arrow,
    button.slick-next.slick-arrow {
        display: none !important;
    }

    button.slick-prev.slick-arrow:after {
        content: "<";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: #2c3b53;
        color: #fff;
        display: none;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    button.slick-next.slick-arrow {
        position: relative;
        width: 40px;
        overflow: hidden;
        background: transparent;
        border: 0;
        position: absolute;
        left: auto;
        right: 0px;
        z-index: 11;
        top: 50%;
        transform: translateY(-50%);
        height: 40px;
    }

    button.slick-next.slick-arrow:after {
        content: ">";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: #2c3b53;
        color: #fff;
        display: none;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .sliders-list.slick-initialized.slick-slider {
        position: relative;
    }

    .single-slider {
        padding: 30px 0;
    }

    .slider-img img {
        display: block;
        width: 55%;
        margin: 50px;
    }

    .single-slider.slick-slide {
        padding: 15px;
    }

    .sliders-list.slick-initialized.slick-slider {
        padding: 0 40px;
    }

    .car__wheel {
        d: path("M8,2 L2,8");
    }

    .move_car svg {
        float: left;
    }

    #How-it-Works .blurb img{
        width: 150px;
    }
</style>
@endsection
@section('content')
<!-- Hero Section -->
<section id="Sell-Your-Car" class="hero-section text-center">
    <div class="container">
        <div class="row top">
            <div class="col-md-8 offset-md-2">
                <div class="blurb">
                    <h1>{{$herosection->header ?? ''}}</h1>
                    <h3><span>No.1</span> {{$herosection->sub_header}}</h3>
                    <p>{{$herosection->text}}</p>
                </div>

                <!-- Form -->
                <div class="search-form">
                    <form action="{{route('find.vehicle')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12 pb-3">
                                <div class="input-perent d-flex" style="position: relative;">
                                    <img src="{{asset ('assets/img/vrm-euro1.png')}}" alt="" style="position: absolute;left:0;height: 70px;width: 30px;">
                                    <input id="reg_number" type="text" name="reg_number" class="form-control" placeholder="AA19AAA" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <button type="submit" class="btn btn-danger w-100">Value My Car</button>
                                <!-- <a href="{{url ('/home')}}" class="btn btn-danger w-100">Value My Car</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row car_row">
            <div class="col-md-6">
                <div class="move_car">
                    <svg version="1.0" width="250pt" height="160pt" viewBox="0 0 1300 2" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com">
                        <path style="stroke: rgb(0, 0, 0); fill: rgb(19, 41, 61);" d="M 331.166 45.359 H 548.012 V 189.251 H 259.266 V 117.259 A 71.9 71.9 0 0 1 331.166 45.359 Z" bx:shape="rect 259.266 45.359 288.746 143.892 71.9 0 0 0 1@8ece2bf0" />
                        <path style="fill: rgb(19, 41, 61); stroke: rgba(0, 0, 0, 0);" d="M 762.804 130.113 H 1025.709 A 49 49 0 0 1 1074.709 179.113 V 261.937 H 741.804 V 151.113 A 21 21 0 0 1 762.804 130.113 Z" transform="matrix(0.964161, 0.265318, -0.396562, 0.928045, -213.344299, -285.564667)" bx:shape="rect 741.804 130.113 332.905 131.824 21 49 0 0 1@60dfc274" />
                        <path d="M 623.728 40.421 L 726.561 107.229 L 520.894 107.229 L 623.728 40.421 Z" style="fill: rgb(19, 41, 61); stroke: rgba(0, 0, 0, 0);" bx:shape="triangle 520.894 40.421 205.667 66.808 0.5 0 1@d7e9fa69" />
                        <path d="M 568.054 33.217 L 670.887 100.025 L 465.22 100.025 L 568.054 33.217 Z" style="fill: rgb(19, 41, 61); paint-order: stroke; fill-rule: nonzero; stroke: rgba(0, 0, 0, 0);" bx:shape="triangle 465.22 33.217 205.667 66.808 0.5 0 1@211f6e6b" />
                        <g transform="matrix(0.087311, 0, 0, -0.092428, 17.374298, 516.641785)" fill="#000000" stroke="none" style="">
                            <g style="" transform="matrix(1.008265, 0, 0, 1.006168, -0.003248, -6.540366)">
                                <path d="M 3525 5341 C 3453 5323 3446 5313 3435 5220 C 3431 5190 3424 5158 3419 5149 C 3415 5140 3322 5098 3213 5055 C 2439 4751 1865 4515 1610 4394 C 1447 4317 1388 4303 1189 4290 C 1104 4285 1019 4276 1000 4270 C 899 4238 638 4212 380 4207 L 265 4205 L 218 4125 C 171 4047 171 4045 189 4025 C 223 3989 224 3948 194 3848 C 164 3749 160 3670 175 3478 C 180 3411 179 3390 169 3390 C 140 3390 86 3334 59 3276 C 9 3170 -15 2933 11 2809 C 24 2751 24 2747 14 2650 C 9 2596 30 2412 42 2406 C 44 2405 71 2386 103 2365 C 176 2316 226 2262 235 2222 C 252 2143 402 2067 590 2041 C 694 2026 1559 1944 1677 1937 L 1709 1935 L 1714 2095 C 1721 2325 1764 2489 1860 2654 C 2141 3133 2777 3327 3265 3083 C 3581 2924 3795 2659 3863 2341 C 3885 2235 3892 1976 3876 1822 L 3868 1740 L 6870 1740 C 9725 1740 9872 1741 9865 1758 C 9832 1845 9809 2083 9820 2219 C 9848 2539 9997 2786 10279 2978 C 10678 3251 11126 3260 11522 3002 C 11761 2845 11919 2610 11982 2315 C 12000 2231 11997 1974 11977 1885 C 11969 1847 11963 1814 11965 1812 C 11972 1804 12351 1832 12443 1846 C 12623 1874 12696 1911 12747 1998 C 12771 2039 12775 2055 12775 2125 C 12774 2169 12766 2242 12755 2288 C 12737 2367 12737 2376 12753 2478 C 12784 2677 12793 2784 12794 2975 C 12795 3151 12793 3170 12771 3235 C 12725 3370 12668 3425 12488 3509 C 12266 3613 11855 3729 11320 3839 C 10797 3947 9796 4049 9266 4050 L 9037 4050 L 8801 4189 C 7988 4666 7208 5073 6949 5155 C 6451 5312 5351 5350 4057 5255 L 3869 5241 L 3822 5271 C 3730 5329 3599 5360 3525 5341 Z M 5437 5030 C 5450 4985 5495 4725 5525 4515 C 5558 4289 5599 3976 5596 3973 C 5589 3966 3924 4013 3542 4031 C 3185 4047 3078 4087 2969 4246 C 2907 4337 2882 4471 2910 4572 C 2922 4612 2966 4646 3102 4720 C 3471 4918 3901 5009 4720 5060 C 4966 5075 5010 5076 5230 5076 L 5424 5075 L 5437 5030 Z M 6086 5040 C 6469 5004 6803 4954 7020 4901 C 7230 4849 7471 4738 7740 4569 C 7881 4481 8119 4310 8120 4298 C 8120 4293 8106 4290 8088 4290 C 8040 4290 7974 4253 7948 4212 C 7924 4173 7918 4099 7933 4023 L 7942 3980 L 7038 3980 L 6134 3980 L 5958 4520 L 5783 5060 L 5830 5060 C 5855 5060 5971 5051 6086 5040 Z" style="fill: rgb(242, 64, 38);" />
                            </g>
                            <!-- Back Tyre -->
                            <g class="car__wheel">
                                <path d="M 2638.627 3137.734 C 2204.065 3055.228 1858.23 2695.02 1793.701 2257.337 C 1776.56 2139.615 1786.643 1963.536 1817.899 1844.808 C 1931.833 1406.119 2319.007 1089.176 2772.727 1063.016 C 3283.917 1033.837 3739.653 1377.946 3857.62 1881.03 C 3885.852 1998.752 3883.835 2231.177 3853.587 2350.911 C 3758.81 2731.242 3467.421 3025.043 3087.305 3123.648 C 2981.437 3150.814 2748.528 3157.857 2638.627 3137.734 Z M 3019.752 2825.822 C 3104.446 2804.692 3230.479 2740.298 3302.066 2682.946 C 3419.025 2588.366 3513.802 2439.453 3555.14 2287.522 C 3578.331 2199.986 3579.339 2025.919 3555.14 1930.333 C 3496.661 1691.871 3311.14 1488.625 3078.231 1408.132 C 2542.842 1220.984 1995.354 1686.84 2101.222 2241.238 C 2131.47 2394.176 2195.999 2516.928 2308.924 2629.619 C 2420.842 2740.298 2547.883 2808.717 2697.107 2836.89 C 2781.801 2852.988 2934.049 2847.958 3019.752 2825.822 Z" style="fill: rgb(19, 41, 61);" />
                                <path d="M 2942.115 2577.298 C 2944.132 2486.743 2949.173 2409.268 2954.214 2404.238 C 2971.355 2387.133 3063.107 2462.595 3156.876 2571.261 L 3208.297 2628.613 L 3159.9 2659.804 C 3107.471 2693.008 3027.818 2725.205 2973.371 2735.267 L 2939.09 2741.304 L 2942.115 2577.298 Z" style="" />
                                <path d="M 2612.412 2710.113 C 2549.9 2687.977 2444.032 2627.607 2447.057 2615.533 C 2450.082 2602.453 2686.016 2398.201 2698.115 2398.201 C 2705.173 2398.201 2713.239 2405.244 2716.264 2414.299 C 2724.33 2434.423 2724.33 2542.083 2715.255 2647.73 C 2708.198 2743.316 2707.189 2744.322 2612.412 2710.113 Z" style="fill: rgb(19, 41, 61);" />
                                <path d="M 3235.52 2362.985 C 3178.049 2298.59 3129.652 2239.226 3127.636 2231.177 C 3121.586 2206.023 3174.016 2195.961 3285.934 2201.998 C 3344.413 2205.016 3407.934 2210.047 3426.083 2213.066 C 3459.355 2218.097 3460.364 2219.103 3453.306 2255.325 C 3446.248 2299.596 3388.777 2423.355 3360.545 2457.565 L 3341.388 2481.713 L 3235.52 2362.985 Z" style="" />
                                <path d="M 2278.677 2417.318 C 2247.42 2373.046 2210.114 2283.497 2201.04 2230.171 L 2194.99 2196.967 L 2351.272 2196.967 C 2517.635 2196.967 2553.933 2206.023 2533.768 2241.238 C 2520.66 2265.386 2328.082 2458.571 2317.999 2458.571 C 2312.958 2458.571 2295.817 2440.46 2278.677 2417.318 Z" style="" />
                                <path d="M 2809.024 2361.979 C 2772.727 2326.763 2809.024 2274.442 2853.388 2297.584 C 2879.603 2311.67 2879.603 2353.929 2854.396 2368.016 C 2829.189 2381.096 2827.173 2381.096 2809.024 2361.979 Z" style="" />
                                <path d="M 2773.735 2192.942 C 2716.264 2160.745 2705.173 2081.258 2751.553 2034.974 C 2794.908 1992.715 2853.388 1991.709 2895.735 2033.968 C 2938.082 2076.227 2937.074 2134.585 2894.727 2177.85 C 2861.454 2210.047 2816.082 2216.084 2773.735 2192.942 Z" style="" />
                                <path d="M 2581.156 2142.634 C 2561.999 2119.492 2573.09 2081.258 2599.305 2078.239 C 2643.669 2071.196 2666.859 2110.437 2635.602 2140.622 C 2616.445 2160.745 2597.288 2160.745 2581.156 2142.634 Z" style="" />
                                <path d="M 3026.809 2130.56 C 2999.586 2111.443 2998.578 2094.338 3023.785 2072.202 C 3048.991 2049.06 3085.289 2066.165 3085.289 2101.381 C 3085.289 2134.585 3055.041 2150.683 3026.809 2130.56 Z" style="" />
                                <path d="M 2263.553 1998.752 C 2185.916 1992.715 2186.924 1993.721 2204.065 1933.351 C 2220.197 1878.012 2265.569 1786.451 2296.825 1746.204 L 2314.974 1723.062 L 2418.825 1845.814 C 2476.297 1913.228 2523.685 1975.61 2524.693 1984.666 C 2525.702 1998.752 2510.578 2000.764 2419.834 2001.771 C 2361.354 2001.771 2291.784 2000.764 2263.553 1998.752 Z" style="" />
                                <path d="M 3191.157 1986.678 C 3146.793 1982.653 3129.652 1976.616 3127.636 1964.542 C 3124.611 1948.444 3339.372 1734.13 3357.52 1734.13 C 3379.702 1734.13 3444.231 1876 3463.388 1963.536 L 3470.446 1995.733 L 3360.545 1993.721 C 3301.058 1992.715 3224.429 1989.696 3191.157 1986.678 Z" style="" />
                                <path d="M 2798.941 1919.265 C 2779.784 1901.154 2779.784 1899.141 2792.892 1873.987 C 2798.941 1862.919 2814.065 1854.87 2828.181 1854.87 C 2848.346 1854.87 2873.553 1879.018 2873.553 1899.141 C 2873.553 1909.203 2841.289 1935.363 2828.181 1935.363 C 2821.123 1935.363 2807.008 1928.32 2798.941 1919.265 Z" style="" />
                                <path d="M 2610.396 1747.21 C 2523.685 1656.655 2470.247 1595.279 2470.247 1584.211 C 2470.247 1559.057 2650.726 1482.588 2708.198 1482.588 L 2735.421 1482.588 L 2728.363 1626.47 C 2719.288 1793.494 2715.255 1814.623 2693.074 1814.623 C 2683.999 1814.623 2646.693 1784.438 2610.396 1747.21 Z" style="" />
                                <path d="M 2960.264 1805.568 C 2954.214 1795.506 2936.066 1636.532 2931.024 1545.977 C 2927.999 1485.606 2929.008 1482.588 2950.181 1482.588 C 3029.834 1482.588 3214.347 1551.007 3200.231 1575.155 C 3195.19 1582.199 3146.793 1639.55 3091.338 1701.933 C 2997.57 1807.58 2973.371 1826.697 2960.264 1805.568 Z" style="" />
                            </g>
                            <!-- Front Tyre -->
                            <g class="car__wheel">
                                <path d="M 10811.626 3137.734 C 10490.998 3079.376 10209.692 2870.093 10062.485 2579.311 C 9837.642 2135.591 9963.675 1577.168 10353.874 1283.367 C 10466.8 1198.849 10543.428 1157.596 10667.444 1116.343 C 10943.709 1024.782 11216.949 1045.911 11476.073 1177.719 C 12032.636 1461.458 12217.148 2166.782 11871.313 2686.971 C 11644.454 3028.062 11214.933 3211.184 10811.626 3137.734 Z M 11199.809 2820.791 C 11550.685 2722.187 11783.594 2375.059 11736.206 2019.882 C 11668.652 1508.748 11135.28 1218.972 10672.486 1442.341 C 10431.51 1559.057 10273.213 1796.512 10257.08 2066.165 C 10236.915 2403.231 10450.667 2710.113 10777.345 2815.76 C 10900.354 2856.007 11068.734 2858.019 11199.809 2820.791 Z" style="fill: rgb(19, 41, 61);" />
                                <path d="M 11108.056 2577.298 C 11111.081 2486.743 11117.131 2409.268 11122.172 2404.238 C 11135.28 2390.151 11175.61 2422.349 11278.453 2526.99 L 11374.238 2624.588 L 11351.048 2642.699 C 11300.635 2682.946 11160.486 2740.298 11114.106 2740.298 C 11104.023 2740.298 11103.015 2707.094 11108.056 2577.298 Z" style="" />
                                <path d="M 10793.478 2716.15 C 10743.064 2700.051 10659.378 2657.792 10629.13 2633.644 L 10605.94 2614.527 L 10727.94 2506.867 C 10795.494 2446.497 10856.998 2398.201 10864.056 2398.201 C 10887.246 2398.201 10891.279 2437.441 10884.221 2585.348 C 10876.155 2748.347 10880.188 2743.316 10793.478 2716.15 Z" style="" />
                                <path d="M 11400.453 2361.979 C 11340.966 2296.578 11292.569 2235.201 11292.569 2225.14 C 11292.569 2214.072 11303.66 2207.029 11330.883 2203.004 C 11375.247 2195.961 11611.181 2210.047 11622.272 2220.109 C 11637.396 2236.208 11570.85 2404.238 11527.495 2457.565 L 11508.338 2481.713 L 11400.453 2361.979 Z" style="" />
                                <path d="M 10447.643 2421.342 C 10408.32 2358.96 10377.064 2286.516 10368.998 2236.208 L 10361.94 2196.967 L 10515.196 2196.967 C 10601.907 2196.967 10677.527 2201.998 10688.618 2207.029 C 10705.759 2217.09 10706.767 2220.109 10693.659 2245.263 C 10685.593 2260.356 10634.172 2316.701 10578.717 2371.034 L 10478.899 2470.645 L 10447.643 2421.342 Z" style="" />
                                <path d="M 10977.99 2367.009 C 10953.792 2352.923 10954.8 2310.664 10980.007 2297.584 C 11024.37 2274.442 11060.668 2326.763 11024.37 2361.979 C 11006.222 2381.096 11001.18 2381.096 10977.99 2367.009 Z" style="" />
                                <path d="M 10940.684 2193.949 C 10891.279 2164.77 10874.139 2092.326 10905.395 2047.048 C 10914.469 2033.968 10937.66 2017.869 10955.808 2009.82 C 10985.048 1997.746 10995.131 1997.746 11024.37 2009.82 C 11124.189 2051.073 11110.073 2190.93 11005.213 2203.004 C 10981.015 2206.023 10954.8 2201.998 10940.684 2193.949 Z" style="" />
                                <path d="M 10748.106 2142.634 C 10728.949 2119.492 10740.04 2081.258 10766.254 2078.239 C 10810.618 2071.196 10833.808 2110.437 10802.552 2140.622 C 10783.395 2160.745 10764.238 2160.745 10748.106 2142.634 Z" style="" />
                                <path d="M 11187.709 2130.56 C 11178.635 2122.511 11171.577 2108.424 11171.577 2101.381 C 11171.577 2088.301 11197.792 2056.104 11207.875 2056.104 C 11228.04 2056.104 11252.238 2081.258 11252.238 2101.381 C 11252.238 2115.467 11244.172 2130.56 11233.081 2136.597 C 11207.875 2149.677 11205.858 2149.677 11187.709 2130.56 Z" style="" />
                                <path d="M 10420.419 1996.74 C 10359.923 1990.703 10359.923 1990.703 10362.948 1960.518 C 10372.023 1891.092 10467.808 1710.988 10485.957 1730.105 C 10543.428 1791.481 10697.692 1981.647 10694.668 1989.696 C 10690.635 2001.771 10517.213 2006.801 10420.419 1996.74 Z" style="" />
                                <path d="M 11360.123 1988.69 C 11291.561 1983.659 11280.47 1969.573 11312.734 1928.32 C 11335.924 1897.129 11514.387 1734.13 11524.47 1734.13 C 11527.495 1734.13 11544.635 1758.278 11561.776 1787.457 C 11591.016 1835.753 11614.206 1899.141 11629.33 1968.567 L 11635.379 1995.733 L 11527.495 1993.721 C 11466.999 1992.715 11392.387 1990.703 11360.123 1988.69 Z" style="" />
                                <path d="M 10959.841 1915.24 C 10943.709 1884.049 10963.874 1852.858 10998.155 1856.882 C 11019.329 1858.895 11026.387 1865.938 11028.403 1889.08 C 11033.445 1934.357 10981.015 1954.481 10959.841 1915.24 Z" style="" />
                                <path d="M 10739.031 1706.963 C 10682.568 1647.599 10637.196 1593.266 10637.196 1586.223 C 10637.196 1558.051 10810.618 1482.588 10876.155 1482.588 L 10902.37 1482.588 L 10895.312 1606.347 C 10885.23 1786.451 10880.188 1814.623 10859.015 1814.623 C 10848.932 1814.623 10795.494 1766.327 10739.031 1706.963 Z" style="" />
                                <path d="M 11126.205 1805.568 C 11119.147 1793.494 11103.015 1660.68 11096.965 1561.069 C 11092.932 1483.594 11092.932 1482.588 11116.123 1482.588 C 11161.494 1482.588 11247.197 1504.724 11310.718 1533.902 L 11375.247 1563.081 L 11356.09 1586.223 C 11290.552 1668.729 11156.453 1814.623 11145.362 1814.623 C 11138.304 1814.623 11130.238 1810.599 11126.205 1805.568 Z" style="" />
                            </g>
                        </g>
                        <ellipse style="stroke: rgb(0, 0, 0); fill: rgb(255, 255, 255);" cx="1120.456" cy="240.375" rx="19.022" ry="33.068" />
                    </svg>
                </div>


                <!-- <img src="{{asset ('assets/img/car.png')}}" alt="car" class="float-start">
                <div class="moving-left-tyr circle1">
                    <img src="{{asset ('assets/img/tyr.png')}}" alt="" class="img-fluid">
                </div>
                <div class="moving-right-tyr circle2">
                    <img src="{{asset ('assets/img/tyr.png')}}" alt="" class="img-fluid">
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Suppport Section -->
<section class="support_section p-3 pb-1 text-center text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>For Support mail us at: Info@websitename.com</p>
            </div>
        </div>
    </div>
</section>
<!-- How it Works -->
<section id="How-it-Works" class="how_it_Works text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title">
                    <h2>{{$howitworksheader->header ?? ''}}</h2>
                    <p>{{$howitworksheader->sub_header ?? ''}}</p>
                </div>
            </div>
        </div>

        <div class="row steps pt-5">
            @foreach($howitworks as $work)
            @if(count($howitworks)>3)
            <div class="col-md-3 col-12  align-items-center ">
                @else
                <div class="col-md-4 col-12  align-items-center ">
                    @endif
                    <div class="blurb">
                        <img alt="{{$work->file}}" src="{{asset('images/home'.'/'.$work->file)}}" class="float-center pb-3" width="18%" height="auto">
                        <h2>{{$work->title ?? ''}}</h2>
                        <p>{{$work->exceed ?? ''}} </p>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4 col-12">
                    <div class="blurb">
                        <img src=" {{asset ('assets/img/book.png')}}" alt="Value my Car" class="float-center pb-3">
                        <h2>Book Appointment</h2>
                        <p>Book an appointment for <br> a free car inspection <br> near you.</p>
                    </div>
                </div> -->

            </div>
        </div>
</section>
<!-- Buy a Car Section -->
<section id="Buy-a-Car" class="buy_a_car">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row form_overlap_row pt-5">
                <div class="col-12 text-center">
                    <div class="title">
                        <h2>Looking for a new car?</h2>
                        <p>Please fill out the form so we can help you source your new car.</p>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <form id="msform" method="post" action="{{url('buy-car-leads-save')}}">
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            @foreach($questionair as $key=> $q)
                            @php
                            $class="";
                            if($key==0)
                            {
                            $class="active";
                            }
                            @endphp
                            <li class="{{$class}}" id="account"><strong></strong></li>
                            @endforeach
                            <!-- <li id="personal"><strong></strong></li>
                                <li id="payment"><strong></strong></li>
                                <li id="confirm"><strong></strong></li> -->
                        </ul>
                        @php
                        $i=0;
                        @endphp
                        @if(session()->get('thankyou')=='thankyou')
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title text-center">Success !</h2> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"></div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5>You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        @else
                        @foreach($questionair as $x=> $question)
                        @php
                        $i++
                        @endphp
                        <fieldset>
                            <div class="form-card">
                                <h2 class="fs-title">{{$question->question}}</h2>
                                <input type="hidden" name="question[]" value="{{$question->question}}" />
                                <input type="text" name="answer[]" id="answer{{$i}}" placeholder="{{$question->placeholder}}" @if(count($questionair)==$i){{'required'}}@endif>
                            </div>
                            @if(count($questionair)!=$i)
                            <input type="button" name="next" id="{{$i}}" class="next action-button" value="Next">
                            @else
                            <h2 class="fs-title">Other Details:</h2>
                            <div class="form-card">
                                <input type="text" name="lead_source" placeholder="Lead Source e.g Social Media" required>
                            </div>
                            <div class="form-card">
                                <input type="text" name="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-card">
                                <input type="text" name="phone" placeholder="Enter Phone no" minlength="10" maxlength="11" required>
                            </div>
                            <div class="form-card">
                                <input type="email" name="email" placeholder="Enter Email" required>
                            </div>
                            <input type="submit" class="action-button" value="Confirm">
                            @endif
                        </fieldset>
                        @endforeach
                        @endif

                        <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Hey, What is your good name</h2>
                                    <input type="text" name="text" placeholder="Enter Your Name">
                                </div>
                             
                                <input type="button" name="next" class="next action-button" value="Next">
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Hey, What is your good name</h2>
                                    <input type="text" name="text" placeholder="Enter Your Name">
                                </div>
                               
                                <input type="button" name="make_payment" class="next action-button" value="Confirm">
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"></div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->

                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- Steps -->
    <div class="container text-center pt-5">
        <div class="row steps pt-5">
            <div class="col-md-4 col-12">
                <div class="blurb">
                    <img src="{{asset ('assets/img/MicrosoftTeams-image (5).png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Choose a Car</h2>
                    <p>Fill in the form so we know what car you’re looking for</p>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="blurb">
                    <img src="{{asset ('assets/img/MicrosoftTeams-image (1).png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Sourcing Consultation</h2>
                    <p>One of our vehicle sourcing specialists will get in touch and go into more detail to help you find the exact vehicle you want.</p>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="blurb">
                    <img src="{{asset ('assets/img/MicrosoftTeams-image (3).png')}}" alt="Value my Car" class="float-center pb-3">
                    <h2>Getting your Car</h2>
                    <p>Finalising a deal, taking care of the paperwork and getting your car.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Why-sell-your-car -->
<section class="Why-sell-your-car">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="clock-img pt-5">
                    <img src="@if(isset($whysellcar->file)){{asset('images/home/'.'/'.$whysellcar->file ?? '')}}@endif" alt="">
                </div>
                <div class="clock-content text-center">
                    <h2>{{ $whysellcar->title}}</h2>
                    <!-- <hr> --> <br><br>
                    <p>{{$whysellcar->message}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->
<section class="blog_section">
    <div class="container">
        <div class="row text-center pb-5">
            <div class="col">
                <div class="title">
                    <h2>{{$blogheader->header}}</h2>
                    <p>{{$blogheader->sub_header}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @php $i=0;@endphp
                @foreach($blogs as $blog)
                @php
                if($i>1){break;}else{$i++;}
                @endphp
                <div class="card blog_card mb-3">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <a href="{{url('/blog',$blog->permalink)}}">
                                <img src="{{asset('images/blogs/'.'/'.$blog->feature_img)}}" class="img-fluid rounded-start" alt="featured Image">
                            </a>
                        </div>
                        <div class="col-md-7 p-0">
                            <div class="card-body">
                                <div class="cardHeader">
                                    <div class="date-card">
                                        <div class="day">{{$blog->created_at->format('d')}}</div>
                                        <div>
                                            <div class="month">{{$blog->created_at->format('M')}}</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title aliqn-bottom">{{$blog->title ?? ''}}</h5>
                                </div>
                                <p class="card-text">{{$blog->exceed ?? ''}}</p>

                                <p class="card-text">
                                    <a href="{{url('/blog',$blog->permalink)}}" class="mt-auto btn">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- blog post -->
                <!-- <div class="card blog_card nomargin">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="/blog/blog">
                                    <img src="{{asset ('assets/img/featured3.png')}}" class="img-fluid rounded-start" alt="featured Image">
                                </a>
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="card-body">
                                    <div class="cardHeader">
                                        <div class="date-card">
                                            <div class="day">26</div>
                                            <div>
                                                <div class="month">Feb</div>
                                            </div>
                                        </div>
                                        <h5 class="card-title aliqn-bottom">Lorem Ipsum</h5>
                                    </div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>

                                    <p class="card-text">
                                        <a href="/blog/blog" class="mt-auto btn">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
            @php $i=0;@endphp
            @foreach($blogs as $blog)
            @if($i==2)
            <div class="col-md-4">
                <div class="card blog_card mb-3 height100 nomargin">
                    <div class="row g-0 height100">
                        <div class="col-md-12">
                            <a href="{{url('/blog',$blog->permalink)}}">
                                <img src="{{asset('images/blogs/'.'/'.$blog->feature_img)}}" class="img-fluid rounded-start" alt="featured Image">
                            </a>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="card-body height100">
                                <div class="cardHeader">
                                    <div class="date-card">
                                        <div class="day">{{$blog->created_at->format('d')}}</div>
                                        <div>
                                            <div class="month">{{$blog->created_at->format('M')}}</div>
                                        </div>
                                    </div>
                                    <h5 class="card-title aliqn-bottom">{{$blog->title ?? ''}}</h5>
                                </div>
                                <p class="card-text">{{$blog->exceed ?? ''}}</p>

                                <p class="card-text">
                                    <a href="{{url('/blog',$blog->permalink)}}" class="mt-auto btn">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @php $i++;@endphp
            @endforeach
        </div>
    </div>
</section>
<!-- Testimonial Section -->
<!-- <section class="testimonial text-center p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        @foreach($testominals as $x => $testominal)
                        @php
                        if($x==0)
                        {
                        $class="active";
                        }
                        else{
                        $class="";
                        }
                        @endphp
                        <div class="carousel-item {{ $class}}">
                            <img style="max-width:20%" src="{{asset ('images/testominal/'.'/'.$testominal->image)}}" class="thumbnail circled" alt="...">
                            <div class="user_name">
                                <h3>{{$testominal->title ?? ''}}</h3>
                            </div>
                            <div class="rating">
                                @php
                                for($i=0;$i<$testominal->review;$i++){
                                    @endphp
                                    <span class="fa fa-star checked"></span>
                                    @php }
                                    $remain=5-$testominal->review;
                                    for($i=0;$i<$remain;$i++){ @endphp <span class="fa fa-star"></span>
                                        @php } @endphp
                            </div>
                            <div class="para">
                                <p>
                                    {{$testominal->paragraph ?? ''}}
                                </p>
                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->


<div class="slider-area">
    <div class="container">
        <div class="sliders-list">
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/audi.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-bmw-png-509573.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/mer.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/land-rover.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
           
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-jaguar-png-logo-944830.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-aston-martin-png-889778.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-ferrari-png-4313862.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-bentley-logo-png-4708966.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-mclaren-png-4450343.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-porsche-911-png-2875804.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-burning-money-png-1289089.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <!-- <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-burning-money-png-1289089.png')}}" />
                </div>
            </div>  -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-volvo-png-4188595.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-volkswagen-logo-png-32910.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-toyota-logo-png-transparent-4193482.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{asset('assets/img/vippng.com-black-bmw-png-328595.png')}}" />
                </div>
            </div> <!-- /.single-slider -->
        </div> <!-- /.sliders-list -->


    </div><!-- end container -->
</div><!-- end slider area -->


<!-- Suppport Section -->
<section class="want_to_sell p-3 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center d-flex alignCenter">
                <p>Want to Sell Your Car?</p>
            </div>
            <div class="col-md-8 float-center">
                <div class="row">
                    <div class="col-lg-12 ">
                        <form action="{{route('find.vehicle')}}" method="post" class=" formSell d-flex">
                            @csrf
                            <input type="text" name="reg_number" class="form-control" placeholder="AA19AAA" style="padding: 15px;font-size: 22px;font-weight: 600;text-transform: uppercase;">
                            <input type="submit" class="btn btn-danger w-100" value="Value" style="max-width: 35% !important; margin: 0px 0px 0px 20px;background: #2c3b53; ">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.sliders-list').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 3000,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });
    });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

<script type="text/javascript">
    var wheels = $(".car__wheel"),
        tl = new TimelineMax({
            repeat: -1
        });
    tl.to(wheels, 2, {
        rotation: -360,
        transformOrigin: "center center",
        ease: "linear",
    });
</script>
@endsection
