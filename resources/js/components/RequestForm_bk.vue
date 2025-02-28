<template>
  <div class="text-2xl font-semibold">
   <span class="uppercase">request quotation</span>&nbsp;
   <span class="p-0 mx-3 bg-orange-500 badge size-5"></span>
   <span>= ต้องใส่ข้อมูล , </span>
   <span class="p-0 mx-3 badge bg-emerald-500 size-5"></span>
   <span>= ใส่หรือไม่ใส่ก็ได้</span>
  </div>
  <div class="mt-3 mb-3 divider divider-neutral"></div>
  <div class="text-xl font-semibold alert alert-error" role="alert" v-if="isValidated">กรุณากรอกข้อมูลให้ครบถ้วน (Please fill in all the required information.)</div>
  <div class="flex flex-col mt-5 space-y-2">
     <form @submit.prevent="submitRequest">
       <div class="grid grid-cols-3">
         <div class="flex text-xl font-semibold ">
           <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span class="icon-[tabler--calendar-filled] size-9"></span></span>         
           <input type="date" class="border p-[11px] w-full font-normal text-center" id="issue_date" v-model="form.date" required />
         </div>
         <div class="flex text-xl font-semibold ms-2">
           <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span class="icon-[tabler--user-filled] size-9"></span></span>     
           <input type="text" class="border p-[11px] w-full font-normal" placeholder="Input Name..." id="name_user" v-model="form.name" required  />
         </div>
         <div class="flex text-xl font-semibold ms-2">
           <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span class="icon-[ic--baseline-account-balance] size-9"></span></span>     
           <input type="text" class="border p-[11px] w-full font-normal" placeholder="Input Section..." id="section" v-model="form.section" required />
         </div>
         <div class="flex mt-3 text-xl font-semibold">
           <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span class="icon-[ic--baseline-dataset] size-9"></span></span>     
           <span class="flex items-center justify-center px-3 py-2 bg-orange-500">Categories</span>            
           <select id="categories" class="text-xl font-normal border w-[1000px] uppercase text-center" v-model="form.categories">             
             <option value="ASSET">Asset</option>
             <option value="CSM">csm</option>
             <option value="SERVICE">service</option>
             <option value="CHARGE">charge</option>
             <option value="UNIFORM">uniform</option>
             <option value="SUBMAT">submat</option>
             <option value="DELIVERY AND PACKING">delivery & packing</option>
           </select>
         </div>
         <div class="flex mt-3 text-xl font-semibold ms-2">
           <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span class="icon-[ic--baseline-feed] size-9"></span></span>     
           <input type="text" class="border p-[11px] w-full font-normal" id="purpose" placeholder="Purpose (วัตถุประสงค์)..." v-model="form.purpose" required />
         </div>

       </div>
       <div class="mt-3 mb-3 divider"></div>
       <div class="grid grid-cols-2"> 
           <div class="flex flex-col">
             <div class="flex items-center p-3 bg-orange-500 rounded-t-lg">
               <span class="icon-[material-symbols--propane-tank-sharp] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Product & Service (ชื่อสินค้า)</span>
             </div>
             <input type="text" class="p-3 text-xl font-normal border-2" placeholder="กรอกชื่อสินค้า... เช่น Notebook, telephone , Cable เป็นต้น" v-model="form.product" required>
             
           </div>
           <div class="flex flex-col ms-2">
             <div class="flex items-center p-3 bg-orange-500 rounded-t-lg">
               <span class="icon-[material-symbols--newsmode] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Model (ชื่อรุ่นผลิตภัณฑ์)</span>
             </div>
             <input type="text" class="p-3 text-xl font-normal border-2" placeholder="กรอกชื่อรุ่น... เช่น VE245N , VGA-1 เป็นต้น" v-model="form.model" required>
             
           </div>
           <div class="flex flex-col mt-2">
             <div class="flex items-center p-3 bg-orange-500 rounded-t-lg">
               <span class="icon-[material-symbols--branding-watermark] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Brand (ชื่อยี่ห้อ)</span>
             </div>
             <input type="text" class="p-3 text-xl font-normal border-2" placeholder="กรอกชื่อยี่ห้อ... เช่น TASCO , OMRON , HIOS เป็นต้น" v-model="form.brand" required>
             
           </div>
           <div class="flex flex-col mt-2 ms-2">
             <div class="flex items-center p-3 bg-orange-500 rounded-t-lg">
               <span class="icon-[material-symbols--photo-size-select-large-rounded] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Size & Spec & Color</span>
             </div>
             <input type="text" class="p-3 text-xl font-normal border-2" placeholder="เช่น 338x128x244mm , 220V , สีดำ เป็นต้น" v-model="form.size" required>
             
           </div>
           <div class="flex flex-col mt-2">
             <div class="flex items-center p-3 bg-orange-500 rounded-t-lg">
               <span class="icon-[mingcute--numbers-90-sort-ascending-fill] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Qty (จำนวน)</span>
             </div>
             <input type="number" class="p-3 text-xl font-normal border-2" placeholder="ระบุจำนวน..." min="0" max="100" v-model="form.qty" required>
             
           </div>
           <div class="flex flex-col mt-2 ms-2">
             <div class="flex items-center p-3 bg-orange-500 rounded-t-lg">
               <span class="icon-[ic--baseline-1k-plus] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Unit (หน่วยนับ)</span>
             </div>
             <input type="text" class="p-3 text-xl font-normal border-2" value="PCS." v-model="form.unit" required>
             
           </div>
           <div class="flex flex-col mt-2">
             <div class="flex items-center p-3 rounded-t-lg bg-emerald-500">
               <span class="icon-[mingcute--numbers-90-sort-ascending-fill] size-9" ></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Remark (หมายเหตุ)</span>
             </div>
             <input type="text" class="p-3 text-xl font-normal border-2" placeholder="กรอกหมายเหตุ..." v-model="form.remark" required>
             
           </div>
           <div class="flex flex-col mt-2 ms-2">
             <div class="flex items-center p-3 rounded-t-lg bg-emerald-500">
               <span class="icon-[ic--baseline-1k-plus] size-9"></span>
               <div class="divider divider-horizontal"></div>
               <span class="text-2xl font-bold">Upload Files <span class="p-1 text-red-600 bg-white rounded-full">(ประเภทไฟล์ .jpg, .png, .pdf เป็นต้น)</span></span>
             </div>
             <input type="file" class="p-3 text-xl font-normal border-2">
             
           </div>
       </div>
       
       
       <div class="flex mt-3">
         <button type="submit" class="items-center px-6 py-3 text-xl font-semibold text-white bg-blue-500 rounded-md">Submit</button>
       </div>
     </form>
  </div>
  
</template>

<script>

 export default {
   data(){
     return{
      
       forms:{
         date: '',
         name: '',
         section: '',
         categories: '',
         purpose: '',
         product: '',
         model: '',
         brand: '',
         size: '',
         qty: 0,
         unit: '',
         remark: '',
         files: []
       },
       isValidated: false,
       
     }
   },
   methodes:{
     submitRequest(e){
       e.preventDefault();
       
       if(
         !this.form.date && 
         !this.form.name && 
         !this.form.section &&
        !this.form.categories && 
        !this.form.purpose && 
        !this.form.product && 
        !this.form.model && 
        !this.form.brand &&
        !this.form.size && 
        !this.form.qty && 
        !this.form.unit 
       ){
         this.isValidated = true;
         return;
       }

       // const handlefiles = () =>{
       //   this.form.files = event.target.files;
       //   console.log(this.form.files);
       // }
       
     }
   }
   
 }
</script>