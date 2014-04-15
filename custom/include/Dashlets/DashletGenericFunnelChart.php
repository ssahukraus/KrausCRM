


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>sugarcrm_chartabstracts/DashletGenericFunnelChart.php at master · jmertic/sugarcrm_chartabstracts · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    
    

    <meta content="authenticity_token" name="csrf-param" />
<meta content="ooDqERr87U9M5VCrIYX8BLXXrH/9dJHr9zJ4AR95LfI=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundles/github-b3d0d84e896ef3f19b013fe1da756d1b4a434d6d.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundles/github2-5ab64ac97650d8573ae90dab55d0169f7850d0f9.css" media="screen" rel="stylesheet" type="text/css" />
    

    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundles/frameworks-7b5694dece50ddf8456fccf7884bd83581722a3f.js" type="text/javascript"></script>
    
    <script defer="defer" src="https://a248.e.akamai.net/assets.github.com/javascripts/bundles/github-809afcfd6c52e715ed9077da29a2fc5465599d52.js" type="text/javascript"></script>
    

      <link rel='permalink' href='/jmertic/sugarcrm_chartabstracts/blob/450742101a12f1042edf1159988d767a19b0bb3c/DashletGenericFunnelChart.php'>
    <meta property="og:title" content="sugarcrm_chartabstracts"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/jmertic/sugarcrm_chartabstracts"/>
    <meta property="og:image" content="https://a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-140.png?1329275934"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="sugarcrm_chartabstracts - Abstract Chart Classes for making it much easier to build Sugar Chart Dashlets"/>

    <meta name="description" content="sugarcrm_chartabstracts - Abstract Chart Classes for making it much easier to build Sugar Chart Dashlets" />
  <link href="https://github.com/jmertic/sugarcrm_chartabstracts/commits/master.atom" rel="alternate" title="Recent Commits to sugarcrm_chartabstracts:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob  vis-public env-production " data-blob-contribs-enabled="yes">
    <div id="wrapper">

    
    
    

      <div id="header" class="true clearfix">
        <div class="container clearfix">
          <a class="site-logo" href="https://github.com">
            <!--[if IE]>
            <img alt="GitHub" class="github-logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7.png?1323882770" />
            <img alt="GitHub" class="github-logo-hover" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7-hover.png?1324325405" />
            <![endif]-->
            <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1323882770" />
            <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1324325405" />
          </a>

                  <!--
      make sure to use fully qualified URLs here since this nav
      is used on error pages on other domains
    -->
    <ul class="top-nav logged_out">
        <li class="pricing"><a href="https://github.com/plans">Signup and Pricing</a></li>
        <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
        <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      <li class="login"><a href="https://github.com/login?return_to=%2Fjmertic%2Fsugarcrm_chartabstracts%2Fblob%2Fmaster%2FDashletGenericFunnelChart.php">Login</a></li>
    </ul>



          
        </div>
      </div>

      

            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="container hentry">
        <div class="pagehead repohead instapaper_ignore readability-menu">
        <div class="title-actions-bar">
          



              <ul class="pagehead-actions">


          <li><a href="/login?return_to=%2Fjmertic%2Fsugarcrm_chartabstracts" class="minibutton btn-watch watch-button entice tooltipped leftwards" rel="nofollow" title="You must be logged in to use this feature"><span><span class="icon"></span>Watch</span></a></li>
          <li><a href="/login?return_to=%2Fjmertic%2Fsugarcrm_chartabstracts" class="minibutton btn-fork fork-button entice tooltipped leftwards" rel="nofollow" title="You must be logged in to use this feature"><span><span class="icon"></span>Fork</span></a></li>


      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers ">
            <a href="/jmertic/sugarcrm_chartabstracts/watchers" title="Watchers" class="tooltipped downwards">
              6
            </a>
          </li>
          <li class="forks">
            <a href="/jmertic/sugarcrm_chartabstracts/network" title="Forks" class="tooltipped downwards">
              2
            </a>
          </li>
        </ul>
      </li>
    </ul>

          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title">
            <span class="mini-icon public-repo"></span>
            <span class="author vcard">
<a href="/jmertic" class="url fn" itemprop="url" rel="author">              <span itemprop="title">jmertic</span>
              </a></span> /
            <strong><a href="/jmertic/sugarcrm_chartabstracts" class="js-current-repository">sugarcrm_chartabstracts</a></strong>
          </h1>
        </div>

          

  <ul class="tabs">
    <li><a href="/jmertic/sugarcrm_chartabstracts" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/jmertic/sugarcrm_chartabstracts/network" highlight="repo_network">Network</a>
    <li><a href="/jmertic/sugarcrm_chartabstracts/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/jmertic/sugarcrm_chartabstracts/issues" highlight="repo_issues">Issues <span class='counter'>0</span></a></li>


    <li><a href="/jmertic/sugarcrm_chartabstracts/graphs" highlight="repo_graphsrepo_contributors">Graphs</a></li>

  </ul>
 
<div class="frame frame-center tree-finder" style="display:none"
      data-tree-list-url="/jmertic/sugarcrm_chartabstracts/tree-list/450742101a12f1042edf1159988d767a19b0bb3c"
      data-blob-url-prefix="/jmertic/sugarcrm_chartabstracts/blob/450742101a12f1042edf1159988d767a19b0bb3c"
    >

  <div class="breadcrumb">
    <span class="bold"><a href="/jmertic/sugarcrm_chartabstracts">sugarcrm_chartabstracts</a></span> /
    <input class="tree-finder-input js-navigation-enable" type="text" name="query" autocomplete="off" spellcheck="false">
  </div>

    <div class="octotip">
      <p>
        <a href="/jmertic/sugarcrm_chartabstracts/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever" rel="nofollow">Dismiss</a>
        <span class="bold">Octotip:</span> You've activated the <em>file finder</em>
        by pressing <span class="kbd">t</span> Start typing to filter the
        file list. Use <span class="kbd badmono">↑</span> and
        <span class="kbd badmono">↓</span> to navigate,
        <span class="kbd">enter</span> to view files.
      </p>
    </div>

  <table class="tree-browser" cellpadding="0" cellspacing="0">
    <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
    <tr class="js-no-results no-results" style="display: none">
      <th colspan="2">No matching files</th>
    </tr>
    <tbody class="js-results-list js-navigation-container">
    </tbody>
  </table>
</div>

<div id="jump-to-line" style="display:none">
  <h2>Jump to Line</h2>
  <form accept-charset="UTF-8">
    <input name="utf8" type="hidden" value="&#x2713;" />
    <input class="textfield" type="text">
    <div class="full-button">
      <button type="submit" class="classy">
        <span>Go</span>
      </button>
    </div>
  </form>
</div>


<div class="subnav-bar">

  <ul class="actions subnav">
    <li><a href="/jmertic/sugarcrm_chartabstracts/tags" class="blank" highlight="repo_tags">Tags <span class="counter">0</span></a></li>
    <li><a href="/jmertic/sugarcrm_chartabstracts/downloads" class="blank downloads-blank" highlight="repo_downloads">Downloads <span class="counter">0</span></a></li>
    
  </ul>

  <ul class="scope">
    <li class="switcher">

      <div class="context-menu-container js-menu-container js-context-menu">
        <a href="#"
           class="minibutton bigger switcher js-menu-target js-commitish-button btn-branch repo-tree"
           data-hotkey="w"
           data-master-branch="master"
           data-ref="master">
          <span><span class="icon"></span><i>branch:</i> master</span>
        </a>

        <div class="context-pane commitish-context js-menu-content">
          <a href="javascript:;" class="close js-menu-close"></a>
          <div class="context-title">Switch Branches/Tags</div>
          <div class="context-body pane-selector commitish-selector js-navigation-container">
            <div class="filterbar">
              <input type="text" id="context-commitish-filter-field" class="js-navigation-enable" placeholder="Filter branches/tags" data-filterable />

              <ul class="tabs">
                <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
                <li><a href="#" data-filter="tags">Tags</a></li>
              </ul>
            </div>

            <div class="js-filter-tab js-filter-branches" data-filterable-for="context-commitish-filter-field">
              <div class="no-results js-not-filterable">Nothing to show</div>
                <div class="commitish-item branch-commitish selector-item js-navigation-item js-navigation-target">
                  <h4>
                      <a href="/jmertic/sugarcrm_chartabstracts/blob/master/DashletGenericFunnelChart.php" class="js-navigation-open" data-name="master" rel="nofollow">master</a>
                  </h4>
                </div>
            </div>

            <div class="js-filter-tab js-filter-tags" style="display:none" data-filterable-for="context-commitish-filter-field">
              <div class="no-results js-not-filterable">Nothing to show</div>
            </div>
          </div>
        </div><!-- /.commitish-context-context -->
      </div>

    </li>
  </ul>

  <ul class="subnav with-scope">

    <li><a href="/jmertic/sugarcrm_chartabstracts" class="selected" highlight="repo_source">Files</a></li>
    <li><a href="/jmertic/sugarcrm_chartabstracts/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/jmertic/sugarcrm_chartabstracts/branches" class="" highlight="repo_branches" rel="nofollow">Branches <span class="counter">1</span></a></li>
  </ul>

</div>

  
  
  


          

        </div><!-- /.repohead -->

        





<!-- block_view_fragment_key: views7/v8/blob:v21:a9be8ef1aaa61679cc1d6f123116b8de -->
  <div id="slider">

    <div class="breadcrumb" data-path="DashletGenericFunnelChart.php/">
      <b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/jmertic/sugarcrm_chartabstracts/tree/450742101a12f1042edf1159988d767a19b0bb3c" class="js-rewrite-sha" itemprop="url"><span itemprop="title">sugarcrm_chartabstracts</span></a></b> / <strong class="final-path">DashletGenericFunnelChart.php</strong> <span class="js-clippy mini-icon clippy " data-clipboard-text="DashletGenericFunnelChart.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>


      <div class="commit file-history-tease" data-path="DashletGenericFunnelChart.php/">
        <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/97a6059ed8d4a5d603a12a59924d8ce4?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="24" />
        <span class="author"><a href="/jmertic">jmertic</a></span>
        <time class="js-relative-date" datetime="2011-08-06T21:49:18-07:00" title="2011-08-06 21:49:18">August 06, 2011</time>
        <div class="commit-title">
            <a href="/jmertic/sugarcrm_chartabstracts/commit/c297d3c6c39c24044ddfefc152894be5e58c13fa" class="message">Add license</a>
        </div>

        <div class="participation">
          <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
          
        </div>
        <div id="blob_contributors_box" style="display:none">
          <h2>Users on GitHub who have contributed to this file</h2>
          <ul class="facebox-user-list">
            <li>
              <img height="24" src="https://secure.gravatar.com/avatar/97a6059ed8d4a5d603a12a59924d8ce4?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="24" />
              <a href="/jmertic">jmertic</a>
            </li>
          </ul>
        </div>
      </div>

    <div class="frames">
      <div class="frame frame-center" data-path="DashletGenericFunnelChart.php/" data-permalink-url="/jmertic/sugarcrm_chartabstracts/blob/450742101a12f1042edf1159988d767a19b0bb3c/DashletGenericFunnelChart.php" data-title="sugarcrm_chartabstracts/DashletGenericFunnelChart.php at master · jmertic/sugarcrm_chartabstracts · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon text-file"></b></span>
                <span class="mode" title="File Mode">100644</span>
                  <span>105 lines (92 sloc)</span>
                <span>3.993 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                    <a class="grouped-button file-edit-link minibutton bigger lighter js-rewrite-sha" href="/jmertic/sugarcrm_chartabstracts/edit/450742101a12f1042edf1159988d767a19b0bb3c/DashletGenericFunnelChart.php" data-method="post" rel="nofollow"><span>Edit this file</span></a>
                  </li>

                <li>
                  <a href="/jmertic/sugarcrm_chartabstracts/raw/master/DashletGenericFunnelChart.php" class="minibutton btn-raw grouped-button bigger lighter" id="raw-url"><span><span class="icon"></span>Raw</span></a>
                </li>
                  <li>
                    <a href="/jmertic/sugarcrm_chartabstracts/blame/master/DashletGenericFunnelChart.php" class="minibutton btn-blame grouped-button bigger lighter"><span><span class="icon"></span>Blame</span></a>
                  </li>
                <li>
                  <a href="/jmertic/sugarcrm_chartabstracts/commits/master/DashletGenericFunnelChart.php" class="minibutton btn-history grouped-button bigger lighter" rel="nofollow"><span><span class="icon"></span>History</span></a>
                </li>
              </ul>
            </div>
              <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="cm">/*</span></div><div class='line' id='LC3'><span class="cm">Copyright 2011 John Mertic. All rights reserved.</span></div><div class='line' id='LC4'><br/></div><div class='line' id='LC5'><span class="cm">Redistribution and use in source and binary forms, with or without modification, are</span></div><div class='line' id='LC6'><span class="cm">permitted provided that the following conditions are met:</span></div><div class='line' id='LC7'><br/></div><div class='line' id='LC8'><span class="cm">   1. Redistributions of source code must retain the above copyright notice, this list of</span></div><div class='line' id='LC9'><span class="cm">      conditions and the following disclaimer.</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="cm">   2. Redistributions in binary form must reproduce the above copyright notice, this list</span></div><div class='line' id='LC12'><span class="cm">      of conditions and the following disclaimer in the documentation and/or other materials</span></div><div class='line' id='LC13'><span class="cm">      provided with the distribution.</span></div><div class='line' id='LC14'><br/></div><div class='line' id='LC15'><span class="cm">THIS SOFTWARE IS PROVIDED BY JOHN MERTIC ``AS IS&#39;&#39; AND ANY EXPRESS OR IMPLIED</span></div><div class='line' id='LC16'><span class="cm">WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND</span></div><div class='line' id='LC17'><span class="cm">FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL &lt;COPYRIGHT HOLDER&gt; OR</span></div><div class='line' id='LC18'><span class="cm">CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR</span></div><div class='line' id='LC19'><span class="cm">CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR</span></div><div class='line' id='LC20'><span class="cm">SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON</span></div><div class='line' id='LC21'><span class="cm">ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING</span></div><div class='line' id='LC22'><span class="cm">NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF</span></div><div class='line' id='LC23'><span class="cm">ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</span></div><div class='line' id='LC24'><br/></div><div class='line' id='LC25'><span class="cm">The views and conclusions contained in the software and documentation are those of the</span></div><div class='line' id='LC26'><span class="cm">authors and should not be interpreted as representing official policies, either expressed</span></div><div class='line' id='LC27'><span class="cm">or implied, of John Mertic.</span></div><div class='line' id='LC28'><span class="cm">*/</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'><span class="k">require_once</span><span class="p">(</span><span class="s1">&#39;include/Dashlets/DashletGenericChart.php&#39;</span><span class="p">);</span> </div><div class='line' id='LC31'><span class="k">require_once</span><span class="p">(</span><span class="s1">&#39;include/SugarCharts/SugarChartFactory.php&#39;</span><span class="p">);</span> </div><div class='line' id='LC32'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC33'><span class="k">abstract</span> <span class="k">class</span> <span class="nc">DashletGenericFunnelChart</span> <span class="k">extends</span> <span class="nx">DashletGenericChart</span> </div><div class='line' id='LC34'><span class="p">{</span>  </div><div class='line' id='LC35'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC36'><span class="sd">     * Array of group by columns</span></div><div class='line' id='LC37'><span class="sd">     *</span></div><div class='line' id='LC38'><span class="sd">     * @var array </span></div><div class='line' id='LC39'><span class="sd">     */</span></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$groupBy</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC42'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC43'><span class="sd">     * Array of columns from the dataset to be passed to the URL for drilldown</span></div><div class='line' id='LC44'><span class="sd">     * Defaults to self::$groupBy if empty</span></div><div class='line' id='LC45'><span class="sd">     *</span></div><div class='line' id='LC46'><span class="sd">     * @var array </span></div><div class='line' id='LC47'><span class="sd">     */</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$urlParams</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC51'><span class="sd">     * Label that goes below the chart and above the legend</span></div><div class='line' id='LC52'><span class="sd">     *</span></div><div class='line' id='LC53'><span class="sd">     * @var string</span></div><div class='line' id='LC54'><span class="sd">     */</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$subtitle</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/** </span></div><div class='line' id='LC58'><span class="sd">     * Don&#39;t override this method, since it does all the work of actually rendering the chart.</span></div><div class='line' id='LC59'><span class="sd">     *</span></div><div class='line' id='LC60'><span class="sd">     * @see DashletGenericChart::display() </span></div><div class='line' id='LC61'><span class="sd">     */</span> </div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">display</span><span class="p">()</span> </div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span> </div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span> <span class="o">=</span> <span class="nx">SugarChartFactory</span><span class="o">::</span><span class="na">getInstance</span><span class="p">();</span> </div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">setProperties</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">subtitle</span><span class="p">,</span> <span class="s1">&#39;funnel chart 3D&#39;</span><span class="p">);</span> </div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">base_url</span>   <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;module&#39;</span> <span class="o">=&gt;</span>  <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_seedName</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_seedName</span> <span class="o">:</span> <span class="s1">&#39;Home&#39;</span><span class="p">,</span> </div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;action&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;index&#39;</span><span class="p">,</span> </div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;query&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;true&#39;</span><span class="p">,</span> </div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;searchFormTab&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;advanced_search&#39;</span><span class="p">,</span> </div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span> </div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">group_by</span>   <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">groupBy</span><span class="p">;</span> </div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">urlParams</span><span class="p">)</span> <span class="p">)</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">urlParams</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">groupBy</span><span class="p">;</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">url_params</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">urlParams</span><span class="p">;</span></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">setData</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getDataset</span><span class="p">());</span></div><div class='line' id='LC76'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlFile</span> <span class="o">=</span> <span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">getXMLFileName</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">);</span> </div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">saveXMLFile</span><span class="p">(</span><span class="nv">$xmlFile</span><span class="p">,</span> <span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">generateXML</span><span class="p">());</span> </div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&lt;div align=&quot;center&quot;&gt;&#39;</span> <span class="o">.</span> </div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sugarChart</span><span class="o">-&gt;</span><span class="na">display</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">,</span> <span class="nv">$xmlFile</span><span class="p">,</span> <span class="s1">&#39;100%&#39;</span><span class="p">,</span> <span class="s1">&#39;480&#39;</span><span class="p">,</span> <span class="k">false</span><span class="p">)</span> <span class="o">.</span> </div><div class='line' id='LC81'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;&lt;/div&gt;&#39;</span> <span class="o">.</span> </div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">processAutoRefresh</span><span class="p">();</span> </div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC84'><br/></div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/** </span></div><div class='line' id='LC86'><span class="sd">     * This is the format of the data returned</span></div><div class='line' id='LC87'><span class="sd">     *</span></div><div class='line' id='LC88'><span class="sd">     * &lt;code&gt;</span></div><div class='line' id='LC89'><span class="sd">     * &lt;?php</span></div><div class='line' id='LC90'><span class="sd">     * array(</span></div><div class='line' id='LC91'><span class="sd">     *   array(&#39;&lt;Column1Name&gt;&#39; =&gt; &#39;&lt;Column1Value1&gt;&#39;, &#39;&lt;Column2Name&gt;&#39; =&gt; &#39;&lt;Column2Value1&gt;&#39;, &#39;total&#39; =&gt; 5,),</span></div><div class='line' id='LC92'><span class="sd">     *   array(&#39;&lt;Column1Name&gt;&#39; =&gt; &#39;&lt;Column1Value1&gt;&#39;, &#39;&lt;Column2Name&gt;&#39; =&gt; &#39;&lt;Column2Value2&gt;&#39;, &#39;total&#39; =&gt; 4,),</span></div><div class='line' id='LC93'><span class="sd">     *   array(&#39;&lt;Column2Name&gt;&#39; =&gt; &#39;&lt;Column2Value2&gt;&#39;, &#39;&lt;Column2Name&gt;&#39; =&gt; &#39;&lt;Column2Value1&gt;&#39;, &#39;total&#39; =&gt; 8,),</span></div><div class='line' id='LC94'><span class="sd">     *   );</span></div><div class='line' id='LC95'><span class="sd">     * ?&gt;</span></div><div class='line' id='LC96'><span class="sd">     * &lt;/code&gt;</span></div><div class='line' id='LC97'><span class="sd">     * </span></div><div class='line' id='LC98'><span class="sd">     * Column1 is the represents the column for each bar in the chart, and Column2 </span></div><div class='line' id='LC99'><span class="sd">     * a segment in the bar in the chart</span></div><div class='line' id='LC100'><span class="sd">     *</span></div><div class='line' id='LC101'><span class="sd">     * @return array</span></div><div class='line' id='LC102'><span class="sd">     */</span> </div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">abstract</span> <span class="k">protected</span> <span class="k">function</span> <span class="nf">getDataset</span><span class="p">();</span></div><div class='line' id='LC104'><span class="p">}</span>  </div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>

  </div>

<div class="frame frame-loading large-loading-area" style="display:none;" data-tree-list-url="/jmertic/sugarcrm_chartabstracts/tree-list/450742101a12f1042edf1159988d767a19b0bb3c" data-blob-url-prefix="/jmertic/sugarcrm_chartabstracts/blob/450742101a12f1042edf1159988d767a19b0bb3c">
  <img src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-64.gif?1329872009" height="64" width="64">
</div>

      </div>
      <div class="context-overlay"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer" >
        
  <div class="upper_footer">
     <div class="container clearfix">

       <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
       <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="https://github.com/training">Training</a></li>
         <li><a href="http://enterprise.github.com/">GitHub Enterprise</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://get.gaug.es/">Gauges: Analyze web traffic</a></li>
         <li><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></li>
         <li><a href="https://gist.github.com">Gist: Code snippets</a></li>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://mobile.github.com/">Issues for iPhone</a></li>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Extras</h4>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="container clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2012 <span title="0.05033s from fe5.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

      <div class="sponsor">
        <a href="http://www.rackspace.com" class="logo">
          <img alt="Dedicated Server" height="36" src="https://a248.e.akamai.net/assets.github.com/images/modules/footer/rackspaces_logo.png?1329521041" width="38" />
        </a>
        Powered by the <a href="http://www.rackspace.com ">Dedicated
        Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
        Computing</a> of Rackspace Hosting<span>&reg;</span>
      </div>
  </div><!-- /.site -->
</div><!-- /.lower_footer -->

      </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
        <dd>Submit comment</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first">
        <h3>Browsing Commits</h3>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>escape</dt>
          <dd>Close form</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>p</dt>
          <dd>Parent commit</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o</dt>
          <dd>Other parent commit</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div class="ajax-error-message">
      <p><span class="icon"></span> Something went wrong with that request. Please try again. <a href="javascript:;" class="ajax-error-dismiss">Dismiss</a></p>
    </div>

    <div id="logo-popup">
      <h2>Looking for the GitHub logo?</h2>
      <ul>
        <li>
          <h4>GitHub Logo</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip"><img alt="Github_logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/github_logo.png?1306884369" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip" class="minibutton btn-download download"><span><span class="icon"></span>Download</span></a>
        </li>
        <li>
          <h4>The Octocat</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip"><img alt="Octocat" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/octocat.png?1306884369" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip" class="minibutton btn-download download"><span><span class="icon"></span>Download</span></a>
        </li>
      </ul>
    </div>

    
    
    
    <span id='server_response_time' data-time='0.05200' data-host='fe5'></span>
  </body>
</html>

