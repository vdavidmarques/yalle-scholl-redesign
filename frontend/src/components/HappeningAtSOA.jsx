import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";
import Events from "../components/Events";

const HappeningAtSOA = ({ slug }) => {

  const [content, setContent] = useState('');
  useEffect(() => {
    apiService
      .getPageBySlug(slug)
      .then((response) => {
        setContent(response.data[0].acf.contentHomepage);
      })
      .catch((error) => {
        console.log(error);
      });
  });
 
  return (
    <section className="happening-at-soa">
      <article dangerouslySetInnerHTML={{ __html: content }} />
        <Events />
    </section>
  )
};

export default HappeningAtSOA;
