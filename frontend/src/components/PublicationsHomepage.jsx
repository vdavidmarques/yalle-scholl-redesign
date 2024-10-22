import React, { useEffect, useState } from 'react';
import apiService from '../services/apiService';
import Publications from './Publications';

const PublicationsHomepage = ({ slug }) => {
  const [content, setContent] = useState('');
  useEffect(() => {
    apiService
      .getPageBySlug(slug)
      .then((response) => {
        setContent(response.data[0].acf.publicationsHomepage);
      })
      .catch((error) => {
        console.log(error);
      });
  });

  return (
    <section className='publications-homepage'>
      <article dangerouslySetInnerHTML={{ __html: content }} />
      <Publications />
    </section>
  );
};

export default PublicationsHomepage;
