import{d as m,T as d,c as l,o as p,w as t,a as e,u as a,Z as f,b as r,e as u,n as c,f as w}from"./app-ByDSVSHX.js";import{_}from"./GuestLayout.vue_vue_type_script_setup_true_lang-93xiH_ZR.js";import{_ as b,a as x,b as g}from"./TextInput.vue_vue_type_script_setup_true_lang-BxEzOAkj.js";import{P as y}from"./PrimaryButton-S9QLgLUE.js";import"./ApplicationLogo-D1EQHc6V.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const C={class:"mt-4 flex justify-end"},h=m({__name:"ConfirmPassword",setup(P){const s=d({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>{s.reset()}})};return(V,o)=>(p(),l(_,null,{default:t(()=>[e(a(f),{title:"Confirm Password"}),o[2]||(o[2]=r("div",{class:"mb-4 text-sm text-gray-600 dark:text-gray-400"}," This is a secure area of the application. Please confirm your password before continuing. ",-1)),r("form",{onSubmit:w(i,["prevent"])},[r("div",null,[e(b,{for:"password",value:"Password"}),e(x,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:a(s).password,"onUpdate:modelValue":o[0]||(o[0]=n=>a(s).password=n),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),e(g,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),r("div",C,[e(y,{class:c(["ms-4",{"opacity-25":a(s).processing}]),disabled:a(s).processing},{default:t(()=>o[1]||(o[1]=[u(" Confirm ")])),_:1},8,["class","disabled"])])],32)]),_:1}))}});export{h as default};
