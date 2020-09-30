# hash-button

Found `document.cookie = "ctf-hash=false"` in source page
Found `YjNhN2Y2NmNiMWNkMjcxYmY5ZDEzMGU1Mjg1N2UyMTRkNGMxMGNiYj02ODkzNGEzZTk0NTVmYTcyNDIwMjM3ZWIwNTkwMjMyNw==` at hide input above button
Passing through base64 we have `b3a7f66cb1cd271bf9d130e52857e214d4c10cbb=68934a3e9455fa72420237eb05902327`

We need to divide at equals, so we have
`b3a7f66cb1cd271bf9d130e52857e214d4c10cbb`
and
`68934a3e9455fa72420237eb05902327`

Using md5, we have
`b3a7f66cb1cd271bf9d130e52857e214d4c10cbb:hackersec`
and
`68934a3e9455fa72420237eb05902327:false`

Then, we change the __false__ value to __true__ and encrypt back to md5

`b326b5062b2f0e69046810717534cb09:true`

`b3a7f66cb1cd271bf9d130e52857e214d4c10cbb=b326b5062b2f0e69046810717534cb09`
Now we get back to base65 and get the flag


Flag: `YjNhN2Y2NmNiMWNkMjcxYmY5ZDEzMGU1Mjg1N2UyMTRkNGMxMGNiYj1iMzI2YjUwNjJiMmYwZTY5MDQ2ODEwNzE3NTM0Y2IwOQ==`