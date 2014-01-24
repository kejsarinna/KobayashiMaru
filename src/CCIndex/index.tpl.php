<h1>Index Controller</h1>
<p>Welcome to Kobayashi Maru index controller.</p>

<h2>Download</h2>
<p>You can download Kobayashi Maru from github.</p>
<blockquote>
<code>git clone git://github.com/ejsarinna/KobayashiMaru.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/kejsarinna/KobayashiMaru'>https://github.com/kejsarinna/KobayashiMaru</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Kobayashi Maru needs
to be able to write and create files.</p>
<blockquote>
<code>cd kobayashi; chmod 777 site/data</code>
</blockquote>

<p>Second, Kobayashi Maru has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
