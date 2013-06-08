@extends('layout')

@section('content')

<div class="container">
        <div class="marketing">
           <h3>Pricing</h3>
          <p>Plugins can be included individually (though some have required dependencies), or all at once. Both <strong>bootstrap.js</strong> and <strong>bootstrap.min.js</strong> contain all plugins in a single file.</p>

          <h3>Data attributes</h3>
          <p>You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first class API and should be your first consideration when using a plugin.</p>

          <p>That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to disable the data attribute API by unbinding all events on the body namespaced with `'data-api'`. This looks like this:
          <pre class="prettyprint linenums">$('body').off('.data-api')</pre>

          <p>Alternatively, to target a specific plugin, just include the plugin's name as a namespace along with the data-api namespace like this:</p>
          <pre class="prettyprint linenums">$('body').off('.alert.data-api')</pre>

          <h3>Programmatic API</h3>
          <p>We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.</p>
          <h1>Transitions <small>bootstrap-transition.js</small></h1>
          </div>
          <h3>About transitions</h3>
          <p>For simple transition effects, include <strong>bootstrap-transition.js</strong> once alongside the other JS files. If you're using the compiled (or minified) <strong>bootstrap.js</strong>, there is no need to include this&mdash;it's already there.</p>
          <h3>Use cases</h3>
          <p>A few examples of the transition plugin:</p>
          <ul>
            <li>Sliding or fading in modals</li>
            <li>Fading out tabs</li>
            <li>Fading out alerts</li>
            <li>Sliding carousel panes</li>
          </ul>
        </div>
</div>


@stop