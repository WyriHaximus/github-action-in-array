# github-action-in-array

Github Action that checks if item is present in CSV list

## Options

This action supports the following options.

### needle

The item to find in `haystack`

* *Required*: `Yes`
* *Type*: `String`
* *Example*: `somevalue`

### haystack

CSV list of items.

* *Required*: `Yes`
* *Type*: `CSV`
* *Example*: `somevalue,someothervalue,anothervalue,void`

## Output

This action has only one output and that's the `status` output. It has two possible values:

* `success` when item is found in the list.
* `failure` when item isn't found in the list.

*Note*, that this action always has exit code `0` unless something fails, that's because it's indifferent about your 
state of your statuses and checks and leave what to do up to you.

## License ##

Copyright 2019 [Cees-Jan Kiewiet](http://wyrihaximus.net/)

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
