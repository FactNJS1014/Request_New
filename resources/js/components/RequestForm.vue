<template>
  <div class="text-2xl font-semibold">
    <span class="uppercase">request quotation</span>&nbsp;
    <span class="p-0 mx-3 bg-orange-500 badge size-5"></span>
    <span>= ต้องใส่ข้อมูล , </span>
    <span class="p-0 mx-3 badge bg-emerald-500 size-5"></span>
    <span>= ใส่หรือไม่ใส่ก็ได้</span>
  </div>
  <div class="mt-3 mb-3 divider divider-neutral"></div>
  <div class="text-xl font-semibold alert alert-error" role="alert" v-if="isValidated">กรุณากรอกข้อมูลให้ครบถ้วน (Please
    fill in all the information.)</div>
  <div class="text-xl font-semibold transition-transform duration-200 ease-in-out alert alert-soft alert-success"
    role="alert" v-if="isSuccesAlert">
    คุณบันทึกข้อมูลสำเร็จ (You saved data successfully.)
  </div>
  <div class="flex flex-col mt-5 space-y-2">
    <form @submit.prevent="submitRequest">
      <div class="grid grid-cols-3">
        <div class="flex text-xl font-semibold ">
          <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span
              class="icon-[tabler--calendar-filled] size-9"></span></span>
          <input type="date" class="border p-[11px] w-full font-normal text-center" id="issue_date"
            v-model="form.date" />
        </div>
        <div class="flex text-xl font-semibold ms-2">
          <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span
              class="icon-[tabler--user-filled] size-9"></span></span>
          <input type="text" class="border p-[11px] w-full font-normal" placeholder="Input Name..." id="name_user"
            v-model="form.name" />
        </div>
        <div class="flex text-xl font-semibold ms-2">
          <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span
              class="icon-[ic--baseline-account-balance] size-9"></span></span>
          <input type="text" class="border p-[11px] w-full font-normal" placeholder="Input Section..." id="section"
            v-model="form.section" />
        </div>
        <div class="flex mt-3 text-xl font-semibold">
          <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span
              class="icon-[ic--baseline-dataset] size-9"></span></span>
          <span class="flex items-center justify-center px-3 py-2 bg-orange-500">Categories</span>
          <select id="categories" class="text-xl font-normal border w-[1000px] uppercase text-center"
            v-model="form.categories">
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
          <span class="flex items-center justify-center px-3 py-2 bg-orange-500 rounded-l-lg"><span
              class="icon-[ic--baseline-feed] size-9"></span></span>
          <input type="text" class="border p-[11px] w-full font-normal" id="purpose"
            placeholder="Purpose (วัตถุประสงค์)..." v-model="form.purpose" />
        </div>

      </div>
      <div class="mt-3 mb-3 divider"></div>
      <div class="grid grid-cols-1">
        <div class="flex flex-col">

          <div class="join">
            <div class="flex items-center w-1/2 p-3 bg-orange-500 rounded-l-lg">
              <span class="icon-[material-symbols--propane-tank-sharp] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Product & Service (ชื่อสินค้า)</span>
            </div>
            <input type="text" class="w-full p-3 text-xl font-normal border-2"
              placeholder="กรอกชื่อสินค้า... เช่น Notebook, telephone , Cable เป็นต้น" v-model="form.product">

          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 bg-orange-500 rounded-l-lg">
              <span class="icon-[material-symbols--newsmode] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Model (ชื่อรุ่นผลิตภัณฑ์)</span>
            </div>
            <input type="text" class="w-full p-3 text-xl font-normal border-2"
              placeholder="กรอกชื่อรุ่น... เช่น VE245N , VGA-1 เป็นต้น" v-model="form.model">
          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 bg-orange-500 rounded-l-lg">
              <span class="icon-[material-symbols--branding-watermark] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Brand (ชื่อยี่ห้อ)</span>
            </div>
            <input type="text" class="w-full p-3 text-xl font-normal border-2"
              placeholder="กรอกชื่อยี่ห้อ... เช่น TASCO , OMRON , HIOS เป็นต้น" v-model="form.brand">
          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 bg-orange-500 rounded-l-lg">
              <span class="icon-[material-symbols--photo-size-select-large-rounded] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Size & Spec & Color</span>
            </div>
            <input type="text" class="w-full p-3 text-xl font-normal border-2"
              placeholder="เช่น 338x128x244mm , 220V , สีดำ เป็นต้น" v-model="form.size">

          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 bg-orange-500 rounded-l-lg">
              <span class="icon-[mingcute--numbers-90-sort-ascending-fill] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Qty (จำนวน)</span>
            </div>
            <input type="number" class="w-full p-3 text-xl font-normal border-2" placeholder="ระบุจำนวน..." min="0"
              max="100" v-model="form.qty">

          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 bg-orange-500 rounded-l-lg">
              <span class="icon-[ic--baseline-1k-plus] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Unit (หน่วยนับ)</span>
            </div>
            <input type="text" class="w-full p-3 text-xl font-normal border-2" v-model="form.unit">

          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 rounded-l-lg bg-emerald-500">
              <span class="icon-[ic--baseline-assignment] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Remark (หมายเหตุ)</span>
            </div>
            <input type="text" class="w-full p-3 text-xl font-normal border-2" placeholder="กรอกหมายเหตุ..."
              v-model="form.remark">

          </div>

        </div>
        <div class="flex flex-col mt-2">
          <div class="join">
            <div class="flex items-center w-1/2 p-3 rounded-l-lg bg-emerald-500">
              <span class="icon-[ic--round-image] size-9"></span>
              <div class="divider divider-horizontal"></div>
              <span class="text-2xl font-bold">Upload Files </span>
              <span class="p-1 font-semibold text-red-600 bg-white rounded-full ms-2 text-md">(ประเภทไฟล์ .jpg, .png,
                .pdf เป็นต้น)</span>
            </div>
            <input type="file" class="w-full p-3 text-xl font-normal border-2" @change="handlefiles">

          </div>

        </div>


      </div>

      <div class="flex justify-end mt-3">
        <button type="submit"
          class="px-12 py-3 text-2xl font-semibold text-white bg-blue-500 rounded-lg">เพิ่มรายการ</button>
      </div>

    </form>
  </div>

  <div class="w-full mt-5 overflow-x-auto border border-base-content/25">
    <form>
      <table class="table">
        <thead>
          <tr class="bg-blue-300 border-2">
            <th class="text-xl font-bold">Product & Service</th>
            <th class="text-xl font-bold">Model</th>
            <th class="text-xl font-bold">Brand</th>
            <th class="text-xl font-bold">Size / Spec / Color</th>
            <th class="text-xl font-bold">Qty</th>
            <th class="text-xl font-bold">Unit</th>
            <th class="text-xl font-bold">Remark</th>
            <th class="text-xl font-bold">File</th>
            <th class="text-xl font-bold">Option</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>

      <div class="flex justify-center mt-3">
        <button type="submit" v-if="isSavedData"
          class="px-12 py-3 text-2xl font-semibold text-white bg-green-500 rounded-lg">บันทึกข้อมูล</button>
      </div>
    </form>

  </div>
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        date: '',
        name: '',
        section: '',
        categories: 'ASSET',
        purpose: '',
        product: '',
        model: '',
        brand: '',
        size: '',
        qty: 1,
        unit: 'PCS.',
        remark: '',
        files: null
      },
      isValidated: false,
      isSuccesAlert: false,
      isSavedData: false,
    };
  },
  methods: {
    async submitRequest() {
      if (!this.form.date || !this.form.name || !this.form.section ||
        !this.form.categories || !this.form.purpose || !this.form.product ||
        !this.form.model || !this.form.brand || !this.form.size ||
        !this.form.qty || !this.form.unit) {
        this.isValidated = true;
        return;
      }

      this.isValidated = false;

      // Create FormData to handle the file upload
      const formData = new FormData();

      // Append form data
      Object.keys(this.form).forEach(key => {
        if (key !== 'files') {
          formData.append(key, this.form[key]);
        }
      });

      // Append the file if it exists
      if (this.form.files) {
        formData.append('file', this.form.files);
      }

      try {
        const res = await axios.post('/Request_New/request/form', formData, {
          headers: {
            'Content-Type': 'multipart/form-data', // Important for file uploads
          }
        });

        console.log("Request submitted successfully:", res.data);
        
        if (res.data) {
          this.isSuccesAlert = true;  // Assuming `isSuccesAlert` is defined in `data()`

          setTimeout(() => {
            this.isSuccesAlert = false;
          }, 1000);
        }

      } catch (error) {
        console.log("Error: " + error);
      }

      // Handle form submission logic here
      console.log("Form submitted:", this.form);
    },

    handlefiles(event) {
      this.form.files = event.target.files[0];
      console.log("File uploaded:", this.form.files.name);
    }
  }
}
</script>
