// components/ExhibitionsHomepage.js
import React, { useEffect, useState } from 'react';
import apiService from '../services/apiService';
import Exhibitions from './Exhibitions';

const ExhibitionsHomepage = ({ slug }) => {
  const [content, setContent] = useState('');
  useEffect(() => {
    apiService
      .getPageBySlug(slug)
      .then((response) => {
        setContent(response.data[0].acf.exhibitionsHomepage);
      })
      .catch((error) => {
        console.log(error);
      });
  });

  return (
    <section className='exhibitions-homepage'>
      <article dangerouslySetInnerHTML={{ __html: content }} />
      <Exhibitions />
    </section>
  );
};

export default ExhibitionsHomepage;
