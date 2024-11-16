import{o as f,g as x,r as v,d as b,x as C,l as B,m as D,i as E,c as V,a as r,w as l,s as p,y as U,j as y,q as g,b as t,n as k,h as A,p as _,T as S,z as T,e as w,u,A as N}from"./app-ByDSVSHX.js";import{_ as z}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{_ as M,a as O,b as P}from"./TextInput.vue_vue_type_script_setup_true_lang-BxEzOAkj.js";const W={},j={class:"inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 active:bg-red-700 dark:focus:ring-offset-gray-800"};function F(d,n){return f(),x("button",j,[v(d.$slots,"default")])}const h=z(W,[["render",F]]),I={class:"fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0","scroll-region":""},K=b({__name:"Modal",props:{show:{type:Boolean,default:!1},maxWidth:{default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(d,{emit:n}){const a=d,o=n;C(()=>a.show,()=>{a.show?document.body.style.overflow="hidden":document.body.style.overflow="visible"});const m=()=>{a.closeable&&o("close")},i=s=>{s.key==="Escape"&&a.show&&m()};B(()=>document.addEventListener("keydown",i)),D(()=>{document.removeEventListener("keydown",i),document.body.style.overflow="visible"});const c=E(()=>({sm:"sm:max-w-sm",md:"sm:max-w-md",lg:"sm:max-w-lg",xl:"sm:max-w-xl","2xl":"sm:max-w-2xl"})[a.maxWidth]);return(s,e)=>(f(),V(U,{to:"body"},[r(p,{"leave-active-class":"duration-200"},{default:l(()=>[y(t("div",I,[r(p,{"enter-active-class":"ease-out duration-300","enter-from-class":"opacity-0","enter-to-class":"opacity-100","leave-active-class":"ease-in duration-200","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:l(()=>[y(t("div",{class:"fixed inset-0 transform transition-all",onClick:m},e[0]||(e[0]=[t("div",{class:"absolute inset-0 bg-gray-500 opacity-75 dark:bg-gray-900"},null,-1)]),512),[[g,s.show]])]),_:1}),r(p,{"enter-active-class":"ease-out duration-300","enter-from-class":"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95","enter-to-class":"opacity-100 translate-y-0 sm:scale-100","leave-active-class":"ease-in duration-200","leave-from-class":"opacity-100 translate-y-0 sm:scale-100","leave-to-class":"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"},{default:l(()=>[y(t("div",{class:k(["mb-6 transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:mx-auto sm:w-full dark:bg-gray-800",c.value])},[s.show?v(s.$slots,"default",{key:0}):A("",!0)],2),[[g,s.show]])]),_:3})],512),[[g,s.show]])]),_:3})]))}}),L=["type"],q=b({__name:"SecondaryButton",props:{type:{default:"button"}},setup(d){return(n,a)=>(f(),x("button",{type:n.type,class:"inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 dark:border-gray-500 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-offset-gray-800"},[v(n.$slots,"default")],8,L))}}),G={class:"space-y-6"},H={class:"p-6"},J={class:"mt-6"},Q={class:"mt-6 flex justify-end"},Z=b({__name:"DeleteUserForm",setup(d){const n=_(!1),a=_(null),o=S({password:""}),m=()=>{n.value=!0,T(()=>{var s;return(s=a.value)==null?void 0:s.focus()})},i=()=>{o.delete(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>c(),onError:()=>{var s;return(s=a.value)==null?void 0:s.focus()},onFinish:()=>{o.reset()}})},c=()=>{n.value=!1,o.clearErrors(),o.reset()};return(s,e)=>(f(),x("section",G,[e[6]||(e[6]=t("header",null,[t("h2",{class:"text-lg font-medium text-gray-900 dark:text-gray-100"}," Delete Account "),t("p",{class:"mt-1 text-sm text-gray-600 dark:text-gray-400"}," Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. ")],-1)),r(h,{onClick:m},{default:l(()=>e[1]||(e[1]=[w("Delete Account")])),_:1}),r(K,{show:n.value,onClose:c},{default:l(()=>[t("div",H,[e[4]||(e[4]=t("h2",{class:"text-lg font-medium text-gray-900 dark:text-gray-100"}," Are you sure you want to delete your account? ",-1)),e[5]||(e[5]=t("p",{class:"mt-1 text-sm text-gray-600 dark:text-gray-400"}," Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. ",-1)),t("div",J,[r(M,{for:"password",value:"Password",class:"sr-only"}),r(O,{id:"password",ref_key:"passwordInput",ref:a,modelValue:u(o).password,"onUpdate:modelValue":e[0]||(e[0]=$=>u(o).password=$),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:N(i,["enter"])},null,8,["modelValue"]),r(P,{message:u(o).errors.password,class:"mt-2"},null,8,["message"])]),t("div",Q,[r(q,{onClick:c},{default:l(()=>e[2]||(e[2]=[w(" Cancel ")])),_:1}),r(h,{class:k(["ms-3",{"opacity-25":u(o).processing}]),disabled:u(o).processing,onClick:i},{default:l(()=>e[3]||(e[3]=[w(" Delete Account ")])),_:1},8,["class","disabled"])])])]),_:1},8,["show"])]))}});export{Z as _};
