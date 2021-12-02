<div class="container-lg">
   <div class="card mb-3">
      <div class="card-header"><strong>Documentation</strong></div>
      <div class="card-body">
         <p>CoreUI Free Bootstrap Admin Template is built on top of <a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components Library</a>, so if you're looking for documentation for a specific component please check this <a href="https://coreui.io/docs/4.0/components/">documentation.</a></p>
         <h2>Installation</h2>
         <p>CoreUI Free Bootstrap Admin Template can be installed in two ways.</p>
         <h3>Download</h3>
         <p>Visit our <a href="https://coreui.io/">website</a> to download the latest version.</p><a class="btn btn-primary" href="https://coreui.io/#compare">Download</a>
         <h3 class="mt-3">Clone repo</h3>
         <pre class="hljs language-bash"><code> # clone the repo
                  $ git clone https://github.com/coreui/coreui-free-bootstrap-admin-template.git my-project

                  # go into app's directory
                  $ cd my-project

                  # install app's dependencies
                  $ npm install</code></pre>
         <h2 class="mt-5">Usage </h2>
         <h3 id="tooling-setup">Tooling setup</h3>
         <p>CoreUI Admin Template uses <a href="https://docs.npmjs.com/misc/scripts/">npm scripts</a> for its build system. Our <a href="https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/v4.0.2/package.json">package.json</a> includes convenient methods for working with the framework, including compiling code, running tests, and more.</p>
         <p>To use our build system and run template locally, you’ll need a copy of CoreUI’s source files and Node. Follow these steps and you should be ready to rock:</p>
         <ol>
            <li><a href="https://nodejs.org/en/download/">Download and install Node.js</a>, which we use to manage our dependencies.</li>
            <li>Either <a href="https://github.com/coreui/coreui-free-bootstrap-admin-template/archive/v4.0.2.zip">download CoreUI’s sources</a> or fork <a href="https://github.com/coreui/coreui-free-bootstrap-admin-template">CoreUI’s repository</a>.</li>
            <li>Navigate to the root <code>/coreui-free-bootstrap-admin-template</code> directory and run <code>npm install</code> to install our local dependencies listed in <a href="https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/v4.0.2/package.json">package.json</a>.</li>
         </ol>
         <p>When completed, you’ll be able to run the various commands provided from the command line.</p>
         <h2 id="using-npm-scripts">Using npm scripts<a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#using-npm-scripts" style="padding-left: 0.375em;"></a></h2>
         <p>Our <a href="https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/v4.0.2/package.json">package.json</a> includes numerous tasks for developing the project. Run <code>npm run</code> to see all the npm scripts in your terminal. <strong>Primary tasks include:</strong></p>
         <table class="table">
            <thead>
               <tr>
                  <th>Task</th>
                  <th>Description</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><code>npm start</code></td>
                  <td>Compiles CSS and JavaScript, and starts a local server.</td>
               </tr>
               <tr>
                  <td><code>npm run build</code></td>
                  <td>Creates the <code>dist/</code> directory with compiled files. Requires <a href="https://sass-lang.com/">Sass</a>, <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a>.</td>
               </tr>
               <tr>
                  <td><code>npm run serve</code></td>
                  <td>Start a local server for files in dist folder.</td>
               </tr>
            </tbody>
         </table>
         <h2 class="mt-5">Contents </h2>
         <p>
            Within the download you’ll find the following directories and files, logically grouping common assets and providing both compiled and minified variations. You’ll see something like this:
         </p>
         <pre class="hljs">free-bootstrap-admin-template/
                ├── build/
                ├── src/
                │ ├── assets/
                │ │ ├── brand/
                │ │ ├── favicon/
                │ │ ├── icons/
                │ │ ├── img/
                │ ├── js/
                │ ├── pug/
                │ │ ├── _layout/
                │ │ ├── _partial/
                │ │ ├── base/
                │ │ ├── buttons/
                │ │ ├── icons/
                │ │ ├── notifications/
                │ │ ├── ...
                │ │ ├── index.pug
                │ │ └── ...
                │ ├── scss/
                │ ├── vendors/
                │ └── views/
                │ ├── base/
                │ ├── buttons/
                │ ├── css/
                │ ├── icons/
                │ ├── notifications/
                │ ├── ...
                │ ├── index.html
                │ └── ...
                └── package.json</pre>
         <p></p>
      </div>
   </div>
</div>