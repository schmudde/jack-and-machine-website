<h1>Contributing to Bootstrap</h1>

<p>Looking to contribute something to Bootstrap? <strong>Here's how you can help.</strong></p>

<p>Please take a moment to review this document in order to make the contribution
process easy and effective for everyone involved.</p>

<p>Following these guidelines helps to communicate that you respect the time of
the developers managing and developing this open source project. In return,
they should reciprocate that respect in addressing your issue or assessing
patches and features.</p>

<h2>Using the issue tracker</h2>

<p>The <a href="https://github.com/twbs/bootstrap/issues">issue tracker</a> is
the preferred channel for <a href="#bug-reports">bug reports</a>, <a href="#feature-requests">features requests</a>
and <a href="#pull-requests">submitting pull requests</a>, but please respect the following
restrictions:</p>

<ul>
<li><p>Please <strong>do not</strong> use the issue tracker for personal support requests.  Stack
Overflow (<a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap-3"><code>twitter-bootstrap-3</code></a> tag) or <a href="README.md#community">IRC</a> are better places to get help.</p></li>
<li><p>Please <strong>do not</strong> derail or troll issues. Keep the discussion on topic and
respect the opinions of others.</p></li>
<li><p>Please <strong>do not</strong> open issues or pull requests regarding the code in
<a href="https://github.com/necolas/normalize.css"><code>Normalize</code></a> (open them in
their respective repositories).</p></li>
</ul>

<h2>Issues and labels</h2>

<p>Our bug tracker utilizes several labels to help organize and identify issues. Here's what they represent and how we use them:</p>

<ul>
<li><code>browser bug</code> - Issues that are reported to us, but actually are the result of a browser-specific bug. These are diagnosed with reduced test cases and result in an issue opened on that browser's own bug tracker.</li>
<li><code>confirmed</code> - Issues that have been confirmed with a reduced test case and identify a bug in Bootstrap.</li>
<li><code>css</code> - Issues stemming from our compiled CSS or source Less files.</li>
<li><code>customizer</code> - Issues with our web-based Customizer.</li>
<li><code>docs</code> - Issues for improving or updating our documentation.</li>
<li><code>examples</code> - Issues involving the example templates included in our docs.</li>
<li><code>feature</code> - Issues asking for a new feature to be added, or an existing one to be extended or modified. New features require a minor version bump (e.g., <code>v3.0.0</code> to <code>v3.1.0</code>).</li>
<li><code>grunt</code> - Issues with our included JavaScript-based Gruntfile, which is used to run all our tests, concatenate and compile source files, and more.</li>
<li><code>help wanted</code> - Issues we need or would love help from the community to resolve.</li>
<li><code>js</code> - Issues stemming from our compiled or source JavaScript files.</li>
<li><code>meta</code> - Issues with the project itself or our GitHub repository.</li>
</ul>

<p>For a complete look at our labels, see the <a href="https://github.com/twbs/bootstrap/labels">project labels page</a>.</p>

<h2>Bug reports</h2>

<p>A bug is a <em>demonstrable problem</em> that is caused by the code in the repository.
Good bug reports are extremely helpful, so thanks!</p>

<p>Guidelines for bug reports:</p>

<ol>
<li><p><strong>Validate and lint your code</strong> &mdash; <a href="http://html5.validator.nu">validate your HTML</a>
and <a href="https://github.com/twbs/bootlint">lint your HTML</a> to ensure your
problem isn't caused by a simple error in your own code.</p></li>
<li><p><strong>Use the GitHub issue search</strong> &mdash; check if the issue has already been
reported.</p></li>
<li><p><strong>Check if the issue has been fixed</strong> &mdash; try to reproduce it using the
latest <code>master</code> or development branch in the repository.</p></li>
<li><p><strong>Isolate the problem</strong> &mdash; ideally create a <a href="http://css-tricks.com/6263-reduced-test-cases/">reduced test
case</a> and a live example.
<a href="http://jsbin.com/lefey/1/edit?html,output">This JS Bin</a> is a helpful template.</p></li>
</ol>

<p>A good bug report shouldn't leave others needing to chase you up for more
information. Please try to be as detailed as possible in your report. What is
your environment? What steps will reproduce the issue? What browser(s) and OS
experience the problem? Do other browsers show the bug differently? What
would you expect to be the outcome? All these details will help people to fix
any potential bugs.</p>

<p>Example:</p>

<blockquote>
  <p>Short and descriptive example bug report title</p>
  
  <p>A summary of the issue and the browser/OS environment in which it occurs. If
  suitable, include the steps required to reproduce the bug.</p>
  
  <ol>
  <li>This is the first step</li>
  <li>This is the second step</li>
  <li>Further steps, etc.</li>
  </ol>
  
  <p><code>&lt;url&gt;</code> - a link to the reduced test case</p>
  
  <p>Any other information you want to share that is relevant to the issue being
  reported. This might include the lines of code that you have identified as
  causing the bug, and potential solutions (and your opinions on their
  merits).</p>
</blockquote>

<h3>Reporting upstream browser bugs</h3>

<p>Sometimes bugs reported to us are actually caused by bugs in the browser(s) themselves, not bugs in Bootstrap per se.
When feasible, we aim to report such upstream bugs to the relevant browser vendor(s), and then list them on our <a href="http://getbootstrap.com/browser-bugs/">Wall of Browser Bugs</a> and <a href="https://developer.mozilla.org/en-US/docs/Web">document them in MDN</a>.</p>

<table>
<thead>
<tr>
  <th>Vendor(s)</th>
  <th>Browser(s)</th>
  <th>Rendering engine</th>
  <th>Bug reporting website(s)</th>
  <th>Notes</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Mozilla</td>
  <td>Firefox</td>
  <td>Gecko</td>
  <td>https://bugzilla.mozilla.org/enter_bug.cgi</td>
  <td>"Core" is normally the right product option to choose.</td>
</tr>
<tr>
  <td>Apple</td>
  <td>Safari</td>
  <td>WebKit</td>
  <td>https://bugs.webkit.org/enter_bug.cgi?product=WebKit <br> https://bugreport.apple.com</td>
  <td>In Apple's bug reporter, choose "Safari" as the product.</td>
</tr>
<tr>
  <td>Google, Opera</td>
  <td>Chrome, Chromium, Opera v15+</td>
  <td>Blink</td>
  <td>https://code.google.com/p/chromium/issues/list</td>
  <td>Click the "New issue" button.</td>
</tr>
<tr>
  <td>Microsoft</td>
  <td>Internet Explorer</td>
  <td>Trident</td>
  <td>https://connect.microsoft.com/IE/feedback/LoadSubmitFeedbackForm</td>
  <td></td>
</tr>
</tbody>
</table>

<h3>Issues bots</h3>

<p><a href="https://github.com/twbs-lmvtfy">@twbs-lmvtfy</a> is a Bootstrap bot that hangs out in our GitHub issue tracker and automatically checks for HTML validation errors in live examples (e.g. jsFiddles, JS Bins, Bootplys, Plunks, CodePens, etc.) posted in issue comments. If it finds any errors, it will post a follow-up comment on the issue and point out the errors. If this happens with an example you've posted, please fix the errors and post an updated live example. If you opened a bug report, please check whether the bug still occurs with your revised, valid live example. If the bug no longer occurs, it was probably due to your invalid HTML rather than something in Bootstrap and we'd appreciate it if you could close out the GitHub issue.</p>

<h2>Feature requests</h2>

<p>Feature requests are welcome. But take a moment to find out whether your idea
fits with the scope and aims of the project. It's up to <em>you</em> to make a strong
case to convince the project's developers of the merits of this feature. Please
provide as much detail and context as possible.</p>

<h2>Pull requests</h2>

<p>Good pull requests—patches, improvements, new features—are a fantastic
help. They should remain focused in scope and avoid containing unrelated
commits.</p>

<p><strong>Please ask first</strong> before embarking on any significant pull request (e.g.
implementing features, refactoring code, porting to a different language),
otherwise you risk spending a lot of time working on something that the
project's developers might not want to merge into the project.</p>

<p>Please adhere to the <a href="#code-guidelines">coding guidelines</a> used throughout the
project (indentation, accurate comments, etc.) and any other requirements
(such as test coverage).</p>

<p><strong>Do not edit <code>bootstrap.css</code>, <code>bootstrap-theme.css</code>, or <code>bootstrap.js</code>
directly!</strong> Those files are automatically generated. You should edit the
source files in <a href="https://github.com/twbs/bootstrap/tree/master/less"><code>/bootstrap/less/</code></a>
and/or <a href="https://github.com/twbs/bootstrap/tree/master/js"><code>/bootstrap/js/</code></a> instead.</p>

<p>Similarly, when contributing to Bootstrap's documentation, you should edit the
documentation source files in
<a href="https://github.com/twbs/bootstrap/tree/master/docs">the <code>/bootstrap/docs/</code> directory of the <code>master</code> branch</a>.
<strong>Do not edit the <code>gh-pages</code> branch.</strong> That branch is generated from the
documentation source files and is managed separately by the Bootstrap Core Team.</p>

<p>Adhering to the following process is the best way to get your work
included in the project:</p>

<ol>
<li><p><a href="http://help.github.com/fork-a-repo/">Fork</a> the project, clone your fork,
and configure the remotes:</p>

<pre><code class="bash"># Clone your fork of the repo into the current directory
git clone https://github.com/&lt;your-username&gt;/bootstrap.git
# Navigate to the newly cloned directory
cd bootstrap
# Assign the original repo to a remote called "upstream"
git remote add upstream https://github.com/twbs/bootstrap.git
</code></pre></li>
<li><p>If you cloned a while ago, get the latest changes from upstream:</p>

<pre><code class="bash">git checkout master
git pull upstream master
</code></pre></li>
<li><p>Create a new topic branch (off the main project development branch) to
contain your feature, change, or fix:</p>

<pre><code class="bash">git checkout -b &lt;topic-branch-name&gt;
</code></pre></li>
<li><p>Commit your changes in logical chunks. Please adhere to these <a href="http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html">git commit
message guidelines</a>
or your code is unlikely be merged into the main project. Use Git's
<a href="https://help.github.com/articles/interactive-rebase">interactive rebase</a>
feature to tidy up your commits before making them public.</p></li>
<li><p>Locally merge (or rebase) the upstream development branch into your topic branch:</p>

<pre><code class="bash">git pull [--rebase] upstream master
</code></pre></li>
<li><p>Push your topic branch up to your fork:</p>

<pre><code class="bash">git push origin &lt;topic-branch-name&gt;
</code></pre></li>
<li><p><a href="https://help.github.com/articles/using-pull-requests/">Open a Pull Request</a>
with a clear title and description against the <code>master</code> branch.</p></li>
</ol>

<p><strong>IMPORTANT</strong>: By submitting a patch, you agree to allow the project owners to
license your work under the terms of the <a href="LICENSE">MIT License</a> (if it
includes code changes) and under the terms of the
<a href="docs/LICENSE">Creative Commons Attribution 3.0 Unported License</a>
(if it includes documentation changes).</p>

<h3>Pull request bots</h3>

<p><a href="https://github.com/twbs-rorschach">@twbs-rorschach</a> is a Bootstrap bot that hangs out in our GitHub issue tracker and automatically checks all pull requests for a few simple common mistakes. It's possible that Rorschach might leave a comment on your pull request and then close it. If that happens, simply fix the problem(s) mentioned in the comment (there should be link(s) in the comment explaining the problem(s) in detail) and then either:</p>

<ul>
<li>Push the revised version to your pull request's branch and post a comment on the pull request saying that you've fixed the problem(s). One of the Bootstrap Core Team members will then come along and reopen your pull request.</li>
<li>Or you can just open a new pull request for your revised version.</li>
</ul>

<p><a href="https://github.com/twbs-savage">@twbs-savage</a> is a Bootstrap bot that automatically runs cross-browser tests (via <a href="https://saucelabs.com">Sauce</a> and Travis CI) on JavaScript pull requests. Savage will leave a comment on pull requests stating whether cross-browser JS tests passed or failed, with a link to the full Travis build details. If your pull request fails, check the Travis log to see which browser + OS combinations failed. Each browser test in the Travis log includes a link to a Sauce page with details about the test. On those details pages, you can watch a screencast of the test run to see exactly which unit tests failed.</p>

<h2>Code guidelines</h2>

<h3>HTML</h3>

<p><a href="http://codeguide.co/#html">Adhere to the Code Guide.</a></p>

<ul>
<li>Use tags and elements appropriate for an HTML5 doctype (e.g., self-closing tags).</li>
<li>Use CDNs and HTTPS for third-party JS when possible. We don't use protocol-relative URLs in this case because they break when viewing the page locally via <code>file://</code>.</li>
<li>Use <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA">WAI-ARIA</a> attributes in documentation examples to promote accessibility.</li>
</ul>

<h3>CSS</h3>

<p><a href="http://codeguide.co/#css">Adhere to the Code Guide.</a></p>

<ul>
<li>When feasible, default color palettes should comply with <a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast">WCAG color contrast guidelines</a>.</li>
<li>Except in rare cases, don't remove default <code>:focus</code> styles (via e.g. <code>outline: none;</code>) without providing alternative styles. See <a href="http://a11yproject.com/posts/never-remove-css-outlines/">this A11Y Project post</a> for more details.</li>
</ul>

<h3>JS</h3>

<ul>
<li>No semicolons (in client-side JS)</li>
<li>2 spaces (no tabs)</li>
<li>strict mode</li>
<li>"Attractive"</li>
</ul>

<h3>Checking coding style</h3>

<p>Run <code>grunt test</code> before committing to ensure your changes follow our coding standards.</p>

<h2>License</h2>

<p>By contributing your code, you agree to license your contribution under the <a href="LICENSE">MIT License</a>.
By contributing to the documentation, you agree to license your contribution under the <a href="docs/LICENSE">Creative Commons Attribution 3.0 Unported License</a>.</p>

<p>Prior to v3.1.0, Bootstrap's code was released under the Apache License v2.0.</p>