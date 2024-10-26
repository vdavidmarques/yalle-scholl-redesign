import axios from 'axios';

const enviroment = 'http://localhost:8080/yalle-scholl-redesign/backend/index.php?rest_route='
const API_BASE_URL = enviroment + '/wp/v2';

const apiService = {
  getHeaderMenu(slug){
    return axios.get(`${enviroment}/custom-api/v1/menu/${slug}`);
  },
  getPageBySlug(pageSlug) {
    return axios.get(`${API_BASE_URL}/pages&slug=${pageSlug}`);
  },

  getPostBySlug(slug) {
    return axios.get(`${API_BASE_URL}/posts?slug=${slug}`);
  },
  getGeneralInformationData() {
    return axios.get(`${API_BASE_URL}/pages&slug=general-information`);
  },
  getEventsData(){
    return axios.get(`${API_BASE_URL}/events`);
  },
  getPublicationsData(){
    return axios.get(`${API_BASE_URL}/publications`);
  },
  getExhibitionsData(){
    return axios.get(`${API_BASE_URL}/exhibitions`);
  },
  getCoursesData(){
    return axios.get(`${API_BASE_URL}/courses`);
  }
};

export default apiService;
