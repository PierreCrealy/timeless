import{d,T as u,c as p,w as l,o as m,a as t,u as a,Z as c,b as o,g as f,t as w,h as _,e as g,n as y,f as b}from"./app-Z5DXLoli.js";import{_ as k}from"./GuestLayout.vue_vue_type_script_setup_true_lang-eG8n5nIP.js";import{_ as x,a as V,b as v}from"./TextInput.vue_vue_type_script_setup_true_lang-ByBfG4hh.js";import{P as B}from"./PrimaryButton-BtQEhu0e.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const N={key:0,class:"mb-4 text-sm font-medium text-green-600 dark:text-green-400"},P={class:"mt-4 flex items-center justify-end"},T=d({__name:"ForgotPassword",props:{status:{}},setup(C){const e=u({email:""}),i=()=>{e.post(route("password.email"))};return(r,s)=>(m(),p(k,null,{default:l(()=>[t(a(c),{title:"Forgot Password"}),s[2]||(s[2]=o("div",{class:"mb-4 text-sm text-gray-600 dark:text-gray-400"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1)),r.status?(m(),f("div",N,w(r.status),1)):_("",!0),o("form",{onSubmit:b(i,["prevent"])},[o("div",null,[t(x,{for:"email",value:"Email"}),t(V,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:a(e).email,"onUpdate:modelValue":s[0]||(s[0]=n=>a(e).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),t(v,{class:"mt-2",message:a(e).errors.email},null,8,["message"])]),o("div",P,[t(B,{class:y({"opacity-25":a(e).processing}),disabled:a(e).processing},{default:l(()=>s[1]||(s[1]=[g(" Email Password Reset Link ")])),_:1},8,["class","disabled"])])],32)]),_:1}))}});export{T as default};
