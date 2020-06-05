<template>
    <div>
      <label class="typo__label">Custom option template</label>
      <multiselect v-model="value" :options="options" :multiple="true"
      close-on-select="false" :clear-on-select="false"  label="title" track-by="title"  :option-height="104" :custom-label="customLabel" :show-labels="false" :loading="isLoading" >
        
        <template slot="option" slot-scope="props">
            <div class="row w-100">
                <img class="option__image rounded-circle ml-4 mr-2" :src="props.option.img"  >
                <div class="option__desc">
                    <span class="option__title">{{ props.option.title }}</span>
                </div>
            </div>
            
        </template>
      </multiselect>

    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'

export default {
  components: {
    Multiselect
  },
  data () {
    return {
        value: "",
        options: [],
        isLoading: false
        
    }
  },
  mounted(){
        this.getdata();
      },
  methods: {
    customLabel ({ title,img }) {
      return `${title}`
    },
    getdata(){
        this.isLoading=true;
        axios.get('/api/simple')
            .then(response=> {
                
                response.data.forEach(varr=>this.options.push(varr));
                this.isLoading=false;
        });
    }
  }
};




</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
