import{d as c,T as g,i as p,c as y,w as o,o as a,a as i,u as t,Z as k,b as r,g as x,h as v,e as n,n as b,k as h,f as _}from"./app-C03pJIIB.js";import{_ as w}from"./GuestLayout.vue_vue_type_script_setup_true_lang-BMqKpfSB.js";import{P as V}from"./PrimaryButton-oWqBEc51.js";import"./ApplicationLogo-BtTZIdyx.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const B={key:0,class:"mb-4 text-sm font-medium text-green-600 dark:text-green-400"},C={class:"mt-4 flex items-center justify-between"},P=c({__name:"VerifyEmail",props:{status:{}},setup(d){const u=d,s=g({}),l=()=>{s.post(route("verification.send"))},f=p(()=>u.status==="verification-link-sent");return(m,e)=>(a(),y(w,null,{default:o(()=>[i(t(k),{title:"Email Verification"}),e[2]||(e[2]=r("div",{class:"mb-4 text-sm text-gray-600 dark:text-gray-400"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1)),f.value?(a(),x("div",B," A new verification link has been sent to the email address you provided during registration. ")):v("",!0),r("form",{onSubmit:_(l,["prevent"])},[r("div",C,[i(V,{class:b({"opacity-25":t(s).processing}),disabled:t(s).processing},{default:o(()=>e[0]||(e[0]=[n(" Resend Verification Email ")])),_:1},8,["class","disabled"]),i(t(h),{href:m.route("logout"),method:"post",as:"button",class:"rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"},{default:o(()=>e[1]||(e[1]=[n("Log Out")])),_:1},8,["href"])])],32)]),_:1}))}});export{P as default};